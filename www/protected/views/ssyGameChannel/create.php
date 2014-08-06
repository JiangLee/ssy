<?php
/* @var $this SsyGameChannelController */
/* @var $model SsyGameChannel */

$this->breadcrumbs=array(
	'Ssy Game Channels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SsyGameChannel', 'url'=>array('index')),
	array('label'=>'Manage SsyGameChannel', 'url'=>array('admin')),
);
?>

<h1>Create SsyGameChannel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>