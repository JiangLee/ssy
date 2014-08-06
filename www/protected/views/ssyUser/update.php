<?php
/* @var $this SsyUserController */
/* @var $model SsyUser */

$this->breadcrumbs=array(
	'Ssy Users'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SsyUser', 'url'=>array('index')),
	array('label'=>'Create SsyUser', 'url'=>array('create')),
	array('label'=>'View SsyUser', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage SsyUser', 'url'=>array('admin')),
);
?>

<h1>Update SsyUser <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>