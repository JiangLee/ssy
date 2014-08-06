<?php
/* @var $this SsyGameController */
/* @var $data SsyGame */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('game_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->game_id), array('view', 'id'=>$data->game_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('game_name')); ?>:</b>
	<?php echo CHtml::encode($data->game_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('game_type')); ?>:</b>
	<?php echo CHtml::encode($data->game_type); ?>
	<br />


</div>