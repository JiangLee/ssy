<?php

/**
 * This is the model class for table "ssy_goods".
 *
 * The followings are the available columns in table 'ssy_goods':
 * @property integer $goods_id
 * @property integer $publish_user_id
 * @property string $goods_name
 * @property integer $game_id
 * @property integer $goods_channel_id
 * @property integer $goods_area_id
 * @property string $goods_desc
 * @property string $goods_pic
 */
class SsyGoods extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SsyGoods the static model class
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
		return 'ssy_goods';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('publish_user_id, goods_name, game_id, goods_channel_id, goods_area_id, goods_desc, goods_pic', 'required'),
			array('publish_user_id, game_id, goods_channel_id, goods_area_id', 'numerical', 'integerOnly'=>true),
			array('goods_name', 'length', 'max'=>64),
			array('goods_desc', 'length', 'max'=>1024),
			array('goods_pic', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('goods_id, publish_user_id, goods_name, game_id, goods_channel_id, goods_area_id, goods_desc, goods_pic', 'safe', 'on'=>'search'),
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
			'goods_id' => 'Goods',
			'publish_user_id' => 'Publish User',
			'goods_name' => 'Goods Name',
			'game_id' => 'Game',
			'goods_channel_id' => 'Goods Channel',
			'goods_area_id' => 'Goods Area',
			'goods_desc' => 'Goods Desc',
			'goods_pic' => 'Goods Pic',
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

		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('publish_user_id',$this->publish_user_id);
		$criteria->compare('goods_name',$this->goods_name,true);
		$criteria->compare('game_id',$this->game_id);
		$criteria->compare('goods_channel_id',$this->goods_channel_id);
		$criteria->compare('goods_area_id',$this->goods_area_id);
		$criteria->compare('goods_desc',$this->goods_desc,true);
		$criteria->compare('goods_pic',$this->goods_pic,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}