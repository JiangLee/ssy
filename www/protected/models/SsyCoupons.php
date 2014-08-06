<?php

/**
 * This is the model class for table "ssy_coupons".
 *
 * The followings are the available columns in table 'ssy_coupons':
 * @property integer $coupons_id
 * @property integer $replace_score
 * @property integer $replace_money
 * @property string $start_time
 * @property string $retire_time
 */
class SsyCoupons extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SsyCoupons the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ssy_coupons';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('coupons_id', 'required'),
			array('coupons_id, replace_score, replace_money', 'numerical', 'integerOnly'=>true),
			array('start_time, retire_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('coupons_id, replace_score, replace_money, start_time, retire_time', 'safe', 'on'=>'search'),
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
			'coupons_id' => 'Coupons',
			'replace_score' => 'Replace Score',
			'replace_money' => 'Replace Money',
			'start_time' => 'Start Time',
			'retire_time' => 'Retire Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('coupons_id',$this->coupons_id);
		$criteria->compare('replace_score',$this->replace_score);
		$criteria->compare('replace_money',$this->replace_money);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('retire_time',$this->retire_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}