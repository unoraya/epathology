




<?php get_header(); ?>

<div id="core" class="container">
  <div class="row">


        <div class="span10">
            <?php if (get_option('themnific_slider_dis') <> "true") { ?>
                  <?php get_template_part('/includes/sliders/flexslider');?>
            <?php } ?>
                   
            <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                        <h2 class="titulo span5"><?php the_title(); ?></h2>
                        <div class="post">
                            
                             <div class="entry">
                             <?php the_content(); ?>
                                <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:','themnific') . '</span>', 'after' => '</div>' ) ); ?>
                                <?php the_tags( '<p>' . __( 'Tags: ','themnific') . '', ', ', '</p>'); ?>
                             <?php comments_template(); ?>
                            </div>
                        </div>


                        <?php endwhile; ?><!-- end post -->
            <?php else : ?>
                <h1>Perdon no hay paginas encontradas.</h1>
                        <?php get_search_form(); ?><br/>
          <?php endif; ?>

        </div><!-- end #core .span9-->

        <div class="span2">
                <?php get_sidebar(); ?>
        </div>



  </div><!--end #core .row-->
</div><!--end #core-->


<?php get_footer(); ?>