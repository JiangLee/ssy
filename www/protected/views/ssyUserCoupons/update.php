<?php
/* @var $this SsyUserCouponsController */
/* @var $model SsyUserCoupons */

$this->breadcrumbs=array(
	'Ssy User Coupons'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SsyUserCoupons', 'url'=>array('index')),
	array('label'=>'Create SsyUserCoupons', 'url'=>array('create')),
	array('label'=>'View SsyUserCoupons', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage SsyUserCoupons', 'url'=>array('admin')),
);
?>

<h1>Update SsyUserCoupons <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>