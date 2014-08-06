<?php
/* @var $this SsyUserBankCardController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ssy User Bank Cards',
);

$this->menu=array(
	array('label'=>'Create SsyUserBankCard', 'url'=>array('create')),
	array('label'=>'Manage SsyUserBankCard', 'url'=>array('admin')),
);
?>

<h1>Ssy User Bank Cards</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
