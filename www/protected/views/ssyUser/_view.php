<?php
/* @var $this SsyUserController */
/* @var $data SsyUser */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_name')); ?>:</b>
	<?php echo CHtml::encode($data->login_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_password')); ?>:</b>
	<?php echo CHtml::encode($data->login_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_password')); ?>:</b>
	<?php echo CHtml::encode($data->pay_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qq')); ?>:</b>
	<?php echo CHtml::encode($data->qq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('real_name')); ?>:</b>
	<?php echo CHtml::encode($data->real_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_ID')); ?>:</b>
	<?php echo CHtml::encode($data->person_ID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('person_pic_id')); ?>:</b>
	<?php echo CHtml::encode($data->person_pic_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_num')); ?>:</b>
	<?php echo CHtml::encode($data->phone_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail_address')); ?>:</b>
	<?php echo CHtml::encode($data->mail_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score')); ?>:</b>
	<?php echo CHtml::encode($data->score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_time')); ?>:</b>
	<?php echo CHtml::encode($data->login_time); ?>
	<br />

	*/ ?>

</div>