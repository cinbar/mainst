<div class="gr-btn"><span class="lft-btn"></span><a href="<?php echo Yii::app()->urlManager->createUrl('diagnostics/admin');?>">Back</a><span class="rgt-btn"></span></div>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(

'question',

	),
)); 

?>