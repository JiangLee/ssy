<?php
/* @var $this SsyGameChannelController */
/* @var $data SsyGameChannel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('game_channel_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->game_channel_id), array('view', 'id'=>$data->game_channel_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('game_channel_name')); ?>:</b>
	<?php echo CHtml::encode($data->game_channel_name); ?>
	<br />


</div>