<?php
/* @var $this SsyUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ssy Users',
);

$this->menu=array(
	array('label'=>'Create SsyUser', 'url'=>array('create')),
	array('label'=>'Manage SsyUser', 'url'=>array('admin')),
);
?>

<h1>Ssy Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
