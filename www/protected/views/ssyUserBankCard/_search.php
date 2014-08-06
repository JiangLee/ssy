<?php
/* @var $this SsyUserBankCardController */
/* @var $model SsyUserBankCard */
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
		<?php echo $form->label($model,'bank_id'); ?>
		<?php echo $form->textField($model,'bank_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bank_card'); ?>
		<?php echo $form->textField($model,'bank_card'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account'); ?>
		<?php echo $form->textField($model,'account',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_province'); ?>
		<?php echo $form->textField($model,'account_province'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_city'); ?>
		<?php echo $form->textField($model,'account_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_status'); ?>
		<?php echo $form->textField($model,'account_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'realtion_time'); ?>
		<?php echo $form->textField($model,'realtion_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->