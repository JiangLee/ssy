<?php
/* @var $this SsyCouponsController */
/* @var $model SsyCoupons */

$this->breadcrumbs=array(
	'Ssy Coupons'=>array('index'),
	$model->coupons_id=>array('view','id'=>$model->coupons_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SsyCoupons', 'url'=>array('index')),
	array('label'=>'Create SsyCoupons', 'url'=>array('create')),
	array('label'=>'View SsyCoupons', 'url'=>array('view', 'id'=>$model->coupons_id)),
	array('label'=>'Manage SsyCoupons', 'url'=>array('admin')),
);
?>

<h1>Update SsyCoupons <?php echo $model->coupons_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>