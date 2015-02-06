<?php

Yii::import('ext.autonumber.MdmAutonumber');

/**
 * Description of MdmAutonumberBehavior
 *
 * @author MDMunir
 */
class MdmAutonumberBehavior extends CActiveRecordBehavior
{
    public $attribute;
    public $group;
    public $value;
    public $digit;

    /**
     * 
     * @param CModelEvent $event
     */
    protected function beforeSave($event)
    {
        if ($event->sender->isNewRecord) {
            $event->sender->{$this->attribute} = $this->getNumber();
        }
    }

    private function getNumber()
    {
        $ar = MdmAutonumber::model()->findByPk(array(
            'template_group' => $this->group,
            'template_num' => $this->value,
        ));
        if ($ar) {
            $number = $ar->auto_number + 1;
        } else {
            $ar = new MdmAutonumber;
            $ar->template_group = $this->group;
            $ar->template_num = $value;
            $number = 1;
        }
        $ar->update_time = time();
        $ar->auto_number = $number;
        if (!$ar->save()) {
            throw new CException(implode("\n", $ar->errors));
        }
        return str_replace('?', $this->digit ? sprintf("%0{$this->digit}d", $number) : $number, $this->value);
    }
}