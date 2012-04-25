<div id="sidebar"> 

<?php if (get_option('themnific_dis_tabs') <> "true") { ?>
	<?php  the_widget('Search'); ?>
	<?php get_template_part('/includes/uni-tabs');?>
	<?php ec3_get_calendar(); ?>
<?php } ?>   

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>
	<?php endif; ?>	
<div style="clear: both;"></div>	
</div><!-- /#sidebar -->