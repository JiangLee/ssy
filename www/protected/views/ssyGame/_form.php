<?php
/* @var $this SsyGameController */
/* @var $model SsyGame */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ssy-game-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'game_name'); ?>
		<?php echo $form->textField($model,'game_name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'game_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'game_type'); ?>
		<?php echo $form->textField($model,'game_type'); ?>
		<?php echo $form->error($model,'game_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->