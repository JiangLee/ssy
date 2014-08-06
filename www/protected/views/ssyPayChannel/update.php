<?php
/* @var $this SsyPayChannelController */
/* @var $model SsyPayChannel */

$this->breadcrumbs=array(
	'Ssy Pay Channels'=>array('index'),
	$model->pay_channel_id=>array('view','id'=>$model->pay_channel_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SsyPayChannel', 'url'=>array('index')),
	array('label'=>'Create SsyPayChannel', 'url'=>array('create')),
	array('label'=>'View SsyPayChannel', 'url'=>array('view', 'id'=>$model->pay_channel_id)),
	array('label'=>'Manage SsyPayChannel', 'url'=>array('admin')),
);
?>

<h1>Update SsyPayChannel <?php echo $model->pay_channel_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>