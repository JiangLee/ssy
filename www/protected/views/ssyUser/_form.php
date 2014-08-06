<?php
/* @var $this SsyUserController */
/* @var $model SsyUser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ssy-user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'login_name'); ?>
		<?php echo $form->textField($model,'login_name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'login_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login_password'); ?>
		<?php echo $form->textField($model,'login_password',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'login_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_password'); ?>
		<?php echo $form->textField($model,'pay_password',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'pay_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qq'); ?>
		<?php echo $form->textField($model,'qq',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'qq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'real_name'); ?>
		<?php echo $form->textField($model,'real_name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'real_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'person_ID'); ?>
		<?php echo $form->textField($model,'person_ID',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'person_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'person_pic_id'); ?>
		<?php echo $form->textField($model,'person_pic_id',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'person_pic_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_num'); ?>
		<?php echo $form->textField($model,'phone_num',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail_address'); ?>
		<?php echo $form->textField($model,'mail_address',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'mail_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->textField($model,'score'); ?>
		<?php echo $form->error($model,'score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login_time'); ?>
		<?php echo $form->textField($model,'login_time'); ?>
		<?php echo $form->error($model,'login_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->