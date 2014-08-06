<?php
/* @var $this SsyUserCouponsController */
/* @var $data SsyUserCoupons */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coupons_id')); ?>:</b>
	<?php echo CHtml::encode($data->coupons_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('get_time')); ?>:</b>
	<?php echo CHtml::encode($data->get_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retire_time')); ?>:</b>
	<?php echo CHtml::encode($data->retire_time); ?>
	<br />


</div>