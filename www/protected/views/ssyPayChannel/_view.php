<?php
/* @var $this SsyPayChannelController */
/* @var $data SsyPayChannel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_channel_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pay_channel_id), array('view', 'id'=>$data->pay_channel_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_channel_name')); ?>:</b>
	<?php echo CHtml::encode($data->pay_channel_name); ?>
	<br />


</div>