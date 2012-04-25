        <?php if (get_option('themnific_dis_social') <> "true") { ?>
    	<div id="social" class="body3">
            <div class="container">
                <div class="row">     
				<?php get_template_part('/includes/uni-social');?>
                </div>	
             </div>
        </div>
        <?php } ?>
        
<div id="footer" class="body2">
    <div class="container">    
        

        <?php if (get_option('themnific_dis_foowidgets') <> "true") { ?>
            <?php get_template_part('/includes/uni-bottombox');?>
        <?php } ?>




        <div class="row">      
          	<div id="copyright" class="sixcol">
            <?php if(get_option('themnific_footer_left') == 'true'){
                echo stripslashes(get_option('themnific_footer_left_text'));
            } else { ?>
				<p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
            <?php } ?>
			</div>
        
        
        	<div id="credit" class="sixcol last">
            <?php if(get_option('themnific_footer_right') == 'true'){
                echo stripslashes(get_option('themnific_footer_right_text'));
            } else { ?>
				<p><?php _e('Powered by','themnific');?>
                	<a href="http://www.wordpress.org">Wordpress</a>. 
					<?php _e('Designed by','themnific');?> <a href="http://themnific.com">Themnific</a></p>
            <?php } ?>
			</div>

    	</div>
        
        	
	</div><!-- end #footer container -->
</div><!-- /#footer  -->

<?php wp_footer(); ?>
<?php themnific_foot(); ?>
</body>
</html>