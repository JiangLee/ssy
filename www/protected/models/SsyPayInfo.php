<?php

/**
 * This is the model class for table "ssy_pay_info".
 *
 * The followings are the available columns in table 'ssy_pay_info':
 * @property integer $pay_id
 * @property integer $pay_channel_id
 * @property integer $pay_money
 * @property integer $pay_status
 * @property integer $goods_id
 * @property integer $pay_user_id
 */
class SsyPayInfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SsyPayInfo the static model class
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
		return 'ssy_pay_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pay_channel_id, pay_money, pay_status, goods_id, pay_user_id', 'required'),
			array('pay_channel_id, pay_money, pay_status, goods_id, pay_user_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pay_id, pay_channel_id, pay_money, pay_status, goods_id, pay_user_id', 'safe', 'on'=>'search'),
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
			'pay_id' => 'Pay',
			'pay_channel_id' => 'Pay Channel',
			'pay_money' => 'Pay Money',
			'pay_status' => 'Pay Status',
			'goods_id' => 'Goods',
			'pay_user_id' => 'Pay User',
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

		$criteria->compare('pay_id',$this->pay_id);
		$criteria->compare('pay_channel_id',$this->pay_channel_id);
		$criteria->compare('pay_money',$this->pay_money);
		$criteria->compare('pay_status',$this->pay_status);
		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('pay_user_id',$this->pay_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}