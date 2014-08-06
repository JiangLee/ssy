<?php
/* @var $this SsyUserController */
/* @var $model SsyUser */

$this->breadcrumbs=array(
	'Ssy Users'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List SsyUser', 'url'=>array('index')),
	array('label'=>'Create SsyUser', 'url'=>array('create')),
	array('label'=>'Update SsyUser', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete SsyUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SsyUser', 'url'=>array('admin')),
);
?>

<h1>View SsyUser #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'login_name',
		'login_password',
		'pay_password',
		'qq',
		'real_name',
		'person_ID',
		'person_pic_id',
		'address',
		'phone_num',
		'mail_address',
		'score',
		'create_time',
		'login_time',
	),
)); ?>
