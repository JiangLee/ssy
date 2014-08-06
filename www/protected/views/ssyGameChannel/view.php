<?php
/* @var $this SsyGameChannelController */
/* @var $model SsyGameChannel */

$this->breadcrumbs=array(
	'Ssy Game Channels'=>array('index'),
	$model->game_channel_id,
);

$this->menu=array(
	array('label'=>'List SsyGameChannel', 'url'=>array('index')),
	array('label'=>'Create SsyGameChannel', 'url'=>array('create')),
	array('label'=>'Update SsyGameChannel', 'url'=>array('update', 'id'=>$model->game_channel_id)),
	array('label'=>'Delete SsyGameChannel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->game_channel_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SsyGameChannel', 'url'=>array('admin')),
);
?>

<h1>View SsyGameChannel #<?php echo $model->game_channel_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'game_channel_id',
		'game_channel_name',
	),
)); ?>
