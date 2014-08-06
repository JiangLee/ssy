<?php
/* @var $this SsyUserCouponsController */
/* @var $model SsyUserCoupons */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coupons_id'); ?>
		<?php echo $form->textField($model,'coupons_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'get_time'); ?>
		<?php echo $form->textField($model,'get_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retire_time'); ?>
		<?php echo $form->textField($model,'retire_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->