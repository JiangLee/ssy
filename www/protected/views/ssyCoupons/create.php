<?php
/* @var $this SsyCouponsController */
/* @var $model SsyCoupons */

$this->breadcrumbs=array(
	'Ssy Coupons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SsyCoupons', 'url'=>array('index')),
	array('label'=>'Manage SsyCoupons', 'url'=>array('admin')),
);
?>

<h1>Create SsyCoupons</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>