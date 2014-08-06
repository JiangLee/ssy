<?php

/**
 * This is the model class for table "ssy_game".
 *
 * The followings are the available columns in table 'ssy_game':
 * @property integer $game_id
 * @property string $game_name
 * @property integer $game_type
 */
class SsyGame extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SsyGame the static model class
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
		return 'ssy_game';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('game_name, game_type', 'required'),
			array('game_type', 'numerical', 'integerOnly'=>true),
			array('game_name', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('game_id, game_name, game_type', 'safe', 'on'=>'search'),
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
			'game_id' => 'Game',
			'game_name' => 'Game Name',
			'game_type' => 'Game Type',
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

		$criteria->compare('game_id',$this->game_id);
		$criteria->compare('game_name',$this->game_name,true);
		$criteria->compare('game_type',$this->game_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}