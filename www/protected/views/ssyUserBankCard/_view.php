<?php
/* @var $this SsyUserBankCardController */
/* @var $data SsyUserBankCard */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_id')); ?>:</b>
	<?php echo CHtml::encode($data->bank_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_card')); ?>:</b>
	<?php echo CHtml::encode($data->bank_card); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account')); ?>:</b>
	<?php echo CHtml::encode($data->account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_province')); ?>:</b>
	<?php echo CHtml::encode($data->account_province); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_city')); ?>:</b>
	<?php echo CHtml::encode($data->account_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_status')); ?>:</b>
	<?php echo CHtml::encode($data->account_status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('realtion_time')); ?>:</b>
	<?php echo CHtml::encode($data->realtion_time); ?>
	<br />

	*/ ?>

</div>