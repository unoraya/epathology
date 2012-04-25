<?php get_header(); ?>

<div id="core" class="container">
	<div class="row">
    
        <div class="eightcol">
        <?php if (get_option('themnific_slider_dis') <> "true") { ?>
              <?php get_template_part('/includes/sliders/flexslider');?>
        <?php } ?>
             
              <ul class="medpost">
    	<?php if (have_posts()) : ?>
        <?php $iop=1; ?>
		<?php while (have_posts()) : the_post(); ?>
                        <?php if ($iop%2==0){ ?>
                          <li class="twocol-one last" ><?php get_template_part('/includes/post-types/medpost');?></li>
                        <?php }else{ ?>
                          <li class="twocol-one" ><?php get_template_part('/includes/post-types/medpost');?></li>
                        <?php } ?>
                          <?php $iop++; ?>
                            
		<?php endwhile; ?><!-- end post -->
                </ul><!-- end latest posts section-->
               
<div style="clear: both;"></div>




			<ul class="navigation">
			<li class="fl"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older Items' ) ); ?></li>
			<li class="fr"><?php previous_posts_link( __( 'Newer Items <span class="meta-nav">&rarr;</span>' ) ); ?></li>
			</ul><!-- end navigation -->

		<?php else : ?>
			

			<h1>Sorry, no posts matched your criteria.</h1>
		            <?php get_search_form(); ?>
            <br/>
	<?php endif; ?>

        </div><!-- end #core .eightcol-->

    
    
    
        <div class="fourcol last">
        
        		<?php get_sidebar(); ?>
        
        </div>
	</div><!--end #core .row-->

    
   <div style="clear: both;"></div>
</div><!--end #core-->


<?php get_footer(); ?>