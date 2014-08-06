<?php
/* @var $this SsyBankController */
/* @var $data SsyBank */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bank_id), array('view', 'id'=>$data->bank_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_name')); ?>:</b>
	<?php echo CHtml::encode($data->bank_name); ?>
	<br />


</div>