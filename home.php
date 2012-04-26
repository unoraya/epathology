<?php get_header(); ?>

<div id="core" class="container">
  <div class="row">
    <?php /* 

        <div class="span9">
            <?php if (get_option('themnific_slider_dis') <> "true") { ?>
                  <?php get_template_part('/includes/sliders/flexslider');?>
            <?php } ?>
                   
                    <ul class="row">
          	<?php if (have_posts()) : ?>
                  		<?php while (have_posts()) : the_post(); ?>
                                <li class="span3" ><?php get_template_part('/includes/post-types/medpost');?></li>
                  		<?php endwhile; ?><!-- end post -->
                    </ul><!-- end latest posts section-->
                     


        		<ul class="navigation">
        			<li class="fl"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older Items' ) ); ?></li>
        			<li class="fr"><?php previous_posts_link( __( 'Newer Items <span class="meta-nav">&rarr;</span>' ) ); ?></li>
        		</ul><!-- end navigation -->

        	<?php else : ?>
        		<h1>Perdon no hay paginas encontradas.</h1>
        	            <?php get_search_form(); ?><br/>
          <?php endif; ?>

        </div><!-- end #core .span9-->

        <div class="span3">
        		<?php get_sidebar(); ?>
        </div>
         */ ?>

    <div id="buscador" class="input-prepend offset2 span8">
      <form class="searchformhead" method="get" action="<?php echo home_url(); ?>">
        <span class="add-on bb1"></span><input type="text" name="s" id="s" placeholder="Escriba aquí la enfermedad que desea buscar..." size="16" class="bbc">
      </form>
    </div>

  </div><!--end #core .row-->
</div><!--end #core-->


<?php get_footer(); ?>