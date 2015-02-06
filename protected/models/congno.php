<?php

/**
 * This is the model class for table "congno".
 *
 * The followings are the available columns in table 'congno':
 * @property integer $id
 * @property string $ngay
 * @property double $tiengiao
 * @property double $khuongtrung
 * @property double $metri
 * @property double $batrieu
 * @property double $ct6
 * @property double $nguyenngocnai
 * @property double $tong
 */
class congno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'congno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ngay, tiengiao, khuongtrung, metri, batrieu, ct6, nguyenngocnai', 'required'),
			array('tiengiao, khuongtrung, metri, batrieu, ct6, nguyenngocnai, tong', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ngay, tiengiao, khuongtrung, metri, batrieu, ct6, nguyenngocnai, tong', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ngay' => 'Ngày',
			'tiengiao' => 'Tiền Giao',
			'khuongtrung' => 'Khương Trung',
			'metri' => 'Mễ Trì',
			'batrieu' => 'Bà Triệu',
			'ct6' => 'CT6',
			'nguyenngocnai' => 'Nguyễn Ngọc Nại',
			'tong' => 'Số Dư',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('ngay',$this->ngay,true);
		$criteria->compare('tiengiao',$this->tiengiao);
		$criteria->compare('khuongtrung',$this->khuongtrung);
		$criteria->compare('metri',$this->metri);
		$criteria->compare('batrieu',$this->batrieu);
		$criteria->compare('ct6',$this->ct6);
		$criteria->compare('nguyenngocnai',$this->nguyenngocnai);
		$criteria->compare('tong',$this->tong);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return congno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
