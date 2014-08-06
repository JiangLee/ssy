<?php
/* @var $this SsyPayChannelController */
/* @var $model SsyPayChannel */

$this->breadcrumbs=array(
	'Ssy Pay Channels'=>array('index'),
	$model->pay_channel_id,
);

$this->menu=array(
	array('label'=>'List SsyPayChannel', 'url'=>array('index')),
	array('label'=>'Create SsyPayChannel', 'url'=>array('create')),
	array('label'=>'Update SsyPayChannel', 'url'=>array('update', 'id'=>$model->pay_channel_id)),
	array('label'=>'Delete SsyPayChannel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pay_channel_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SsyPayChannel', 'url'=>array('admin')),
);
?>

<h1>View SsyPayChannel #<?php echo $model->pay_channel_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pay_channel_id',
		'pay_channel_name',
	),
)); ?>
