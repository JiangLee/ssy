<?php
/* @var $this SsyUserCouponsController */
/* @var $model SsyUserCoupons */

$this->breadcrumbs=array(
	'Ssy User Coupons'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List SsyUserCoupons', 'url'=>array('index')),
	array('label'=>'Create SsyUserCoupons', 'url'=>array('create')),
	array('label'=>'Update SsyUserCoupons', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete SsyUserCoupons', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SsyUserCoupons', 'url'=>array('admin')),
);
?>

<h1>View SsyUserCoupons #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'coupons_id',
		'get_time',
		'retire_time',
	),
)); ?>
