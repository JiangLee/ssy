<?php
/* @var $this SsyUserCouponsController */
/* @var $model SsyUserCoupons */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ssy-user-coupons-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coupons_id'); ?>
		<?php echo $form->textField($model,'coupons_id'); ?>
		<?php echo $form->error($model,'coupons_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'get_time'); ?>
		<?php echo $form->textField($model,'get_time'); ?>
		<?php echo $form->error($model,'get_time'); ?>
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