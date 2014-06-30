<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('zipcode')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->zipcode), array('view', 'id' => $data->zipcode)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('city')); ?>:
	<?php echo GxHtml::encode($data->city); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('state')); ?>:
	<?php echo GxHtml::encode($data->state); ?>
	<br />

</div>