<?php $searchform = $this->beginWidget('CActiveForm', array(
	'id'=>'business-data-search-form',
	'enableAjaxValidation'=>TRUE,
)); ?>

<?php echo $searchform->textField($model,'name'); ?>

<input  type="text" data-provide="typeahead" placeholder="Search By Business Name"> 
<script>
$('.typeahead').typeahead()
</script>