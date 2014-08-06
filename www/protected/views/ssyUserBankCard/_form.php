<?php
/* @var $this SsyUserBankCardController */
/* @var $model SsyUserBankCard */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ssy-user-bank-card-form',
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
		<?php echo $form->labelEx($model,'bank_id'); ?>
		<?php echo $form->textField($model,'bank_id'); ?>
		<?php echo $form->error($model,'bank_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_card'); ?>
		<?php echo $form->textField($model,'bank_card'); ?>
		<?php echo $form->error($model,'bank_card'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account'); ?>
		<?php echo $form->textField($model,'account',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_province'); ?>
		<?php echo $form->textField($model,'account_province'); ?>
		<?php echo $form->error($model,'account_province'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_city'); ?>
		<?php echo $form->textField($model,'account_city'); ?>
		<?php echo $form->error($model,'account_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_status'); ?>
		<?php echo $form->textField($model,'account_status'); ?>
		<?php echo $form->error($model,'account_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'realtion_time'); ?>
		<?php echo $form->textField($model,'realtion_time'); ?>
		<?php echo $form->error($model,'realtion_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->