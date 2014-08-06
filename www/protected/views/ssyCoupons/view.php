<?php
/* @var $this SsyCouponsController */
/* @var $model SsyCoupons */

$this->breadcrumbs=array(
	'Ssy Coupons'=>array('index'),
	$model->coupons_id,
);

$this->menu=array(
	array('label'=>'List SsyCoupons', 'url'=>array('index')),
	array('label'=>'Create SsyCoupons', 'url'=>array('create')),
	array('label'=>'Update SsyCoupons', 'url'=>array('update', 'id'=>$model->coupons_id)),
	array('label'=>'Delete SsyCoupons', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->coupons_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SsyCoupons', 'url'=>array('admin')),
);
?>

<h1>View SsyCoupons #<?php echo $model->coupons_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'coupons_id',
		'replace_score',
		'replace_money',
		'start_time',
		'retire_time',
	),
)); ?>
