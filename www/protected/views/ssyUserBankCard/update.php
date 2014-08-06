<?php
/* @var $this SsyUserBankCardController */
/* @var $model SsyUserBankCard */

$this->breadcrumbs=array(
	'Ssy User Bank Cards'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SsyUserBankCard', 'url'=>array('index')),
	array('label'=>'Create SsyUserBankCard', 'url'=>array('create')),
	array('label'=>'View SsyUserBankCard', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage SsyUserBankCard', 'url'=>array('admin')),
);
?>

<h1>Update SsyUserBankCard <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>