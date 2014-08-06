<?php
/* @var $this SsyCouponsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ssy Coupons',
);

$this->menu=array(
	array('label'=>'Create SsyCoupons', 'url'=>array('create')),
	array('label'=>'Manage SsyCoupons', 'url'=>array('admin')),
);
?>

<h1>Ssy Coupons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
