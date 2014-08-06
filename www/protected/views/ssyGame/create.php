<?php
/* @var $this SsyGameController */
/* @var $model SsyGame */

$this->breadcrumbs=array(
	'Ssy Games'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SsyGame', 'url'=>array('index')),
	array('label'=>'Manage SsyGame', 'url'=>array('admin')),
);
?>

<h1>Create SsyGame</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>