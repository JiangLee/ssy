<?php
/* @var $this SsyBankController */
/* @var $model SsyBank */

$this->breadcrumbs=array(
	'Ssy Banks'=>array('index'),
	$model->bank_id,
);

$this->menu=array(
	array('label'=>'List SsyBank', 'url'=>array('index')),
	array('label'=>'Create SsyBank', 'url'=>array('create')),
	array('label'=>'Update SsyBank', 'url'=>array('update', 'id'=>$model->bank_id)),
	array('label'=>'Delete SsyBank', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->bank_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SsyBank', 'url'=>array('admin')),
);
?>

<h1>View SsyBank #<?php echo $model->bank_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bank_id',
		'bank_name',
	),
)); ?>
