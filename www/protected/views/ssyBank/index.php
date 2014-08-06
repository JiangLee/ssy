<?php
/* @var $this SsyBankController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ssy Banks',
);

$this->menu=array(
	array('label'=>'Create SsyBank', 'url'=>array('create')),
	array('label'=>'Manage SsyBank', 'url'=>array('admin')),
);
?>

<h1>Ssy Banks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
