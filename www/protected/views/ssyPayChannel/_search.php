<?php
/* @var $this SsyPayChannelController */
/* @var $model SsyPayChannel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pay_channel_id'); ?>
		<?php echo $form->textField($model,'pay_channel_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_channel_name'); ?>
		<?php echo $form->textField($model,'pay_channel_name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->