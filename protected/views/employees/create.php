<?php
   echo $imghtml = '<div class="gr-btn"><span class="lft-btn"></span><a href="'.Yii::app()->urlManager->createUrl('employees/admin').'">Back</a><span class="rgt-btn"></span></div>';
?>

<h1><?php echo Yii::t('app', 'Create') . ' ' . GxHtml::encode($model->label()); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>
