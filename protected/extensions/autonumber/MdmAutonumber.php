<?php

/**
 * Description of MdmAutonumber
 *
 * @author MDMunir
 */
class MdmAutonumber extends CActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return '{{auto_number}}';
    }

    public function rules()
    {
        return array(
            array('template_group, template_num, auto_number', 'required'),
            array('auto_number', 'integer'),
            array('template_group, template_num', 'string')
        );
    }
}