<?php

/**
 * This is the model class for table "ssy_game_area".
 *
 * The followings are the available columns in table 'ssy_game_area':
 * @property integer $game_area_id
 * @property integer $game_id
 * @property string $game_area_name
 */
class SsyGameArea extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SsyGameArea the static model class
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
		return 'ssy_game_area';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('game_area_id, game_id, game_area_name', 'required'),
			array('game_area_id, game_id', 'numerical', 'integerOnly'=>true),
			array('game_area_name', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('game_area_id, game_id, game_area_name', 'safe', 'on'=>'search'),
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
			'game_area_id' => 'Game Area',
			'game_id' => 'Game',
			'game_area_name' => 'Game Area Name',
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

		$criteria->compare('game_area_id',$this->game_area_id);
		$criteria->compare('game_id',$this->game_id);
		$criteria->compare('game_area_name',$this->game_area_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}