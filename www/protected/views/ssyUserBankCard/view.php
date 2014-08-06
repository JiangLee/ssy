<?php
/* @var $this SsyUserBankCardController */
/* @var $model SsyUserBankCard */

$this->breadcrumbs=array(
	'Ssy User Bank Cards'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List SsyUserBankCard', 'url'=>array('index')),
	array('label'=>'Create SsyUserBankCard', 'url'=>array('create')),
	array('label'=>'Update SsyUserBankCard', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete SsyUserBankCard', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SsyUserBankCard', 'url'=>array('admin')),
);
?>

<h1>View SsyUserBankCard #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'bank_id',
		'bank_card',
		'account',
		'account_province',
		'account_city',
		'account_status',
		'realtion_time',
	),
)); ?>
