<?php
/* @var $this SsyCouponsController */
/* @var $model SsyCoupons */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'coupons_id'); ?>
		<?php echo $form->textField($model,'coupons_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'replace_score'); ?>
		<?php echo $form->textField($model,'replace_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'replace_money'); ?>
		<?php echo $form->textField($model,'replace_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_time'); ?>
		<?php echo $form->textField($model,'start_time'); ?>
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