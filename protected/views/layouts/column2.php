<?php $this->beginContent('/layouts/main'); ?>
<div class="container" >
    <div class="span-6 last">
        <div id="sidebar" style="margin: 0">
            <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items'=>$this->menu,
                    'htmlOptions'=>array('class'=>'operations'),
                ));
            ?>
        </div><!-- sidebar -->
    </div>
    <div style="clear: both"></div>
	<div class="span-18">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	
</div>
<?php $this->endContent(); ?>