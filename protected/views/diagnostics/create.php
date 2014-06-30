
<div class="gr-btn"><span class="lft-btn"></span><a href="<?php echo Yii::app()->urlManager->createUrl('diagnostics/admin');?>">Back</a><span class="rgt-btn"></span></div>
<h1><?php echo Yii::t('app', 'Create') . ' ' . GxHtml::encode($model->label()); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>