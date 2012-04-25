        <?php /*if (get_option('themnific_dis_social') <> "true") { ?>
    	<div id="social" class="body3">
            <div class="container">
                <div class="row">     
				<?php get_template_part('/includes/uni-social');?>
                </div>	
             </div>
        </div>
        <?php }*/ ?>
        


<div class="container"> 
        <hr style="border:#EDEDED solid 1px;">

        <footer>

            <div style="text-align: center;">
                <img src="<?php bloginfo("template_url"); ?>/img/logo_angel.jpg" alt="Laboratorio angel">
            </div><!-- logo angel -->

            <hr style="border-top:#36A9E1 solid 1px;">

            <div style="text-align: center;">
                <?php if(get_option('themnific_footer_left') == 'true'){
                    echo stripslashes(get_option('themnific_footer_left_text'));
                }?>

                <?php if(get_option('themnific_footer_right') == 'true'){
                    echo stripslashes(get_option('themnific_footer_right_text'));
                }?>
                <img src="<?php bloginfo("template_url"); ?>/img/social.jpg" alt="Redes sociales laboratorio angel">
            </div><!-- copy -->

        </footer>
</div>

<?php wp_footer(); ?>
<?php themnific_foot(); ?>
</body>
</html>