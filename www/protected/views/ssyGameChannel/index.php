<?php
/* @var $this SsyGameChannelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ssy Game Channels',
);

$this->menu=array(
	array('label'=>'Create SsyGameChannel', 'url'=>array('create')),
	array('label'=>'Manage SsyGameChannel', 'url'=>array('admin')),
);
?>

<h1>Ssy Game Channels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
