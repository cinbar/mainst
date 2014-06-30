
<div class="span4">
	<div class="row">
		<?php echo $form->labelEx($model,'interests'); ?> 
		<?php echo $form->textArea($model, 'interests', array('class'=>'span4', 'rows'=>5)); ?> 
		<?php echo $form->error($model,'interests'); ?>
	</div>

<div class="row">
	<?php echo $form->labelEx($model,'num_visits_success'); ?>
	<?php echo $form->dropDownList($model,'num_visits_success',array('0','1', '2', '3', '4', '5', )); ?>
	<?php echo $form->error($model,'num_visits_success'); ?>
</div>

</div>