<?php
/* @var $this SsyPayChannelController */
/* @var $model SsyPayChannel */

$this->breadcrumbs=array(
	'Ssy Pay Channels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SsyPayChannel', 'url'=>array('index')),
	array('label'=>'Manage SsyPayChannel', 'url'=>array('admin')),
);
?>

<h1>Create SsyPayChannel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>