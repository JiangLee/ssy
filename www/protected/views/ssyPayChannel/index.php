<?php
/* @var $this SsyPayChannelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ssy Pay Channels',
);

$this->menu=array(
	array('label'=>'Create SsyPayChannel', 'url'=>array('create')),
	array('label'=>'Manage SsyPayChannel', 'url'=>array('admin')),
);
?>

<h1>Ssy Pay Channels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
