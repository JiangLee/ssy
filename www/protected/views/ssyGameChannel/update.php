<?php
/* @var $this SsyGameChannelController */
/* @var $model SsyGameChannel */

$this->breadcrumbs=array(
	'Ssy Game Channels'=>array('index'),
	$model->game_channel_id=>array('view','id'=>$model->game_channel_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SsyGameChannel', 'url'=>array('index')),
	array('label'=>'Create SsyGameChannel', 'url'=>array('create')),
	array('label'=>'View SsyGameChannel', 'url'=>array('view', 'id'=>$model->game_channel_id)),
	array('label'=>'Manage SsyGameChannel', 'url'=>array('admin')),
);
?>

<h1>Update SsyGameChannel <?php echo $model->game_channel_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>