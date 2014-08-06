<?php
/* @var $this SsyGameController */
/* @var $model SsyGame */

$this->breadcrumbs=array(
	'Ssy Games'=>array('index'),
	$model->game_id=>array('view','id'=>$model->game_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SsyGame', 'url'=>array('index')),
	array('label'=>'Create SsyGame', 'url'=>array('create')),
	array('label'=>'View SsyGame', 'url'=>array('view', 'id'=>$model->game_id)),
	array('label'=>'Manage SsyGame', 'url'=>array('admin')),
);
?>

<h1>Update SsyGame <?php echo $model->game_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>