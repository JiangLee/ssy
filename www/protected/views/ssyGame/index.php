<?php
/* @var $this SsyGameController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ssy Games',
);

$this->menu=array(
	array('label'=>'Create SsyGame', 'url'=>array('create')),
	array('label'=>'Manage SsyGame', 'url'=>array('admin')),
);
?>

<h1>Ssy Games</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
