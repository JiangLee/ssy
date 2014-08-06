<?php
/* @var $this SsyCouponsController */
/* @var $model SsyCoupons */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ssy-coupons-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'coupons_id'); ?>
		<?php echo $form->textField($model,'coupons_id'); ?>
		<?php echo $form->error($model,'coupons_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'replace_score'); ?>
		<?php echo $form->textField($model,'replace_score'); ?>
		<?php echo $form->error($model,'replace_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'replace_money'); ?>
		<?php echo $form->textField($model,'replace_money'); ?>
		<?php echo $form->error($model,'replace_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_time'); ?>
		<?php echo $form->textField($model,'start_time'); ?>
		<?php echo $form->error($model,'start_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retire_time'); ?>
		<?php echo $form->textField($model,'retire_time'); ?>
		<?php echo $form->error($model,'retire_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->