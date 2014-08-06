<?php

/**
 * This is the model class for table "ssy_user".
 *
 * The followings are the available columns in table 'ssy_user':
 * @property integer $user_id
 * @property string $login_name
 * @property string $login_password
 * @property string $pay_password
 * @property string $qq
 * @property string $real_name
 * @property string $person_ID
 * @property string $person_pic_id
 * @property string $address
 * @property string $phone_num
 * @property string $mail_address
 * @property integer $score
 * @property string $create_time
 * @property string $login_time
 */
class SsyUser extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SsyUser the static model class
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
		return 'ssy_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login_name, login_password, qq', 'required'),
			array('score', 'numerical', 'integerOnly'=>true),
			array('login_name, login_password, pay_password, real_name, person_ID, person_pic_id, mail_address', 'length', 'max'=>64),
			array('qq, phone_num', 'length', 'max'=>20),
			array('address', 'length', 'max'=>256),
			array('create_time, login_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, login_name, login_password, pay_password, qq, real_name, person_ID, person_pic_id, address, phone_num, mail_address, score, create_time, login_time', 'safe', 'on'=>'search'),
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
			'login_name' => 'Login Name',
			'login_password' => 'Login Password',
			'pay_password' => 'Pay Password',
			'qq' => 'Qq',
			'real_name' => 'Real Name',
			'person_ID' => 'Person',
			'person_pic_id' => 'Person Pic',
			'address' => 'Address',
			'phone_num' => 'Phone Num',
			'mail_address' => 'Mail Address',
			'score' => 'Score',
			'create_time' => 'Create Time',
			'login_time' => 'Login Time',
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
		$criteria->compare('login_name',$this->login_name,true);
		$criteria->compare('login_password',$this->login_password,true);
		$criteria->compare('pay_password',$this->pay_password,true);
		$criteria->compare('qq',$this->qq,true);
		$criteria->compare('real_name',$this->real_name,true);
		$criteria->compare('person_ID',$this->person_ID,true);
		$criteria->compare('person_pic_id',$this->person_pic_id,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone_num',$this->phone_num,true);
		$criteria->compare('mail_address',$this->mail_address,true);
		$criteria->compare('score',$this->score);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('login_time',$this->login_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}