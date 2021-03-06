<?php
/* @var $this SsyPayChannelController */
/* @var $model SsyPayChannel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ssy-pay-channel-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_channel_id'); ?>
		<?php echo $form->textField($model,'pay_channel_id'); ?>
		<?php echo $form->error($model,'pay_channel_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_channel_name'); ?>
		<?php echo $form->textField($model,'pay_channel_name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'pay_channel_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->