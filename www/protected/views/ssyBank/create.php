<?php
/* @var $this SsyBankController */
/* @var $model SsyBank */

$this->breadcrumbs=array(
	'Ssy Banks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SsyBank', 'url'=>array('index')),
	array('label'=>'Manage SsyBank', 'url'=>array('admin')),
);
?>

<h1>Create SsyBank</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>