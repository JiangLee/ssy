<?php
/* @var $this SsyUserCouponsController */
/* @var $model SsyUserCoupons */

$this->breadcrumbs=array(
	'Ssy User Coupons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SsyUserCoupons', 'url'=>array('index')),
	array('label'=>'Manage SsyUserCoupons', 'url'=>array('admin')),
);
?>

<h1>Create SsyUserCoupons</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>