<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Proposal'=>array('index'),
	$model->business_name=>array('view','id'=>$model->id),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List Proposal', 'url'=>array('index')),
	array('label'=>'Create Proposal', 'url'=>array('create')),
	array('label'=>'View Proposal', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Proposal', 'url'=>array('admin')),
);
 */
?>

<h1>Update Post <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>