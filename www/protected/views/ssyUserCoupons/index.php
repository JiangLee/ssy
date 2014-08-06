<?php
/* @var $this SsyUserCouponsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ssy User Coupons',
);

$this->menu=array(
	array('label'=>'Create SsyUserCoupons', 'url'=>array('create')),
	array('label'=>'Manage SsyUserCoupons', 'url'=>array('admin')),
);
?>

<h1>Ssy User Coupons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
