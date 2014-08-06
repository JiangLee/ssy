<?php
/* @var $this SsyGameController */
/* @var $model SsyGame */

$this->breadcrumbs=array(
	'Ssy Games'=>array('index'),
	$model->game_id,
);

$this->menu=array(
	array('label'=>'List SsyGame', 'url'=>array('index')),
	array('label'=>'Create SsyGame', 'url'=>array('create')),
	array('label'=>'Update SsyGame', 'url'=>array('update', 'id'=>$model->game_id)),
	array('label'=>'Delete SsyGame', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->game_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SsyGame', 'url'=>array('admin')),
);
?>

<h1>View SsyGame #<?php echo $model->game_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'game_id',
		'game_name',
		'game_type',
	),
)); ?>
