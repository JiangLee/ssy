<?php
/* @var $this SsyUserBankCardController */
/* @var $model SsyUserBankCard */

$this->breadcrumbs=array(
	'Ssy User Bank Cards'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SsyUserBankCard', 'url'=>array('index')),
	array('label'=>'Manage SsyUserBankCard', 'url'=>array('admin')),
);
?>

<h1>Create SsyUserBankCard</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>