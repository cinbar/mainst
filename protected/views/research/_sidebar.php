<div id="sidemenu"  >
	<ul>
		<?php foreach($networks as $n){ ?>
		  <li> 
		<?php echo CHtml::link($n, Yii::app() -> createUrl('') , array ('id'      => $n , 'onclick' => 'changeStyle("'.$n.'");return false;'))?>
		</li> 
		<?}?>
		
    <li> <?php echo CHtml::link("OpenStreet" , Yii::app() -> createUrl('') , array ('id'      => 'OpenStreet' , 'onclick' => 'changeStyle("OpenStreet");return false;'))?></li> 
</ul>
</div>