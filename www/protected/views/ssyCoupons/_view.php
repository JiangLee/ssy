<?php
/* @var $this SsyCouponsController */
/* @var $data SsyCoupons */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('coupons_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->coupons_id), array('view', 'id'=>$data->coupons_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('replace_score')); ?>:</b>
	<?php echo CHtml::encode($data->replace_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('replace_money')); ?>:</b>
	<?php echo CHtml::encode($data->replace_money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_time')); ?>:</b>
	<?php echo CHtml::encode($data->start_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retire_time')); ?>:</b>
	<?php echo CHtml::encode($data->retire_time); ?>
	<br />


</div>