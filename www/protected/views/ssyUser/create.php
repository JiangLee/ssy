<?php
/* @var $this SsyUserController */
/* @var $model SsyUser */

$this->breadcrumbs=array(
	'Ssy Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SsyUser', 'url'=>array('index')),
	array('label'=>'Manage SsyUser', 'url'=>array('admin')),
);
?>

<h1>Create SsyUser</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>