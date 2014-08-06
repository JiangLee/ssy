<?php
/* @var $this SsyBankController */
/* @var $model SsyBank */

$this->breadcrumbs=array(
	'Ssy Banks'=>array('index'),
	$model->bank_id=>array('view','id'=>$model->bank_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SsyBank', 'url'=>array('index')),
	array('label'=>'Create SsyBank', 'url'=>array('create')),
	array('label'=>'View SsyBank', 'url'=>array('view', 'id'=>$model->bank_id)),
	array('label'=>'Manage SsyBank', 'url'=>array('admin')),
);
?>

<h1>Update SsyBank <?php echo $model->bank_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>