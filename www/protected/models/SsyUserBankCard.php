<?php

/**
 * This is the model class for table "ssy_user_bank_card".
 *
 * The followings are the available columns in table 'ssy_user_bank_card':
 * @property integer $user_id
 * @property integer $bank_id
 * @property integer $bank_card
 * @property string $account
 * @property integer $account_province
 * @property integer $account_city
 * @property integer $account_status
 * @property string $realtion_time
 */
class SsyUserBankCard extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SsyUserBankCard the static model class
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
		return 'ssy_user_bank_card';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, bank_id, account, account_province, account_city, account_status', 'required'),
			array('user_id, bank_id, bank_card, account_province, account_city, account_status', 'numerical', 'integerOnly'=>true),
			array('account', 'length', 'max'=>64),
			array('realtion_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, bank_id, bank_card, account, account_province, account_city, account_status, realtion_time', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'bank_id' => 'Bank',
			'bank_card' => 'Bank Card',
			'account' => 'Account',
			'account_province' => 'Account Province',
			'account_city' => 'Account City',
			'account_status' => 'Account Status',
			'realtion_time' => 'Realtion Time',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('bank_id',$this->bank_id);
		$criteria->compare('bank_card',$this->bank_card);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('account_province',$this->account_province);
		$criteria->compare('account_city',$this->account_city);
		$criteria->compare('account_status',$this->account_status);
		$criteria->compare('realtion_time',$this->realtion_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}