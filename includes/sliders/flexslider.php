<div id="myCarousel" class="carousel slide span5">
	<?php 
		$featucat = get_option('themnific_slider1_category');
		$my_query = new WP_Query('showposts=5&orderby=date');	 
		if ($my_query->have_posts()) :
	?>
		<div class="carousel-inner">
				<?php while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	  
				    	<div class="item active">
						    <a href="<?php the_permalink(); ?>">
						    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
						    <!-- <img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=700&amp;h=350" alt="<?php the_title(); ?>"/></a> -->
						    <img class="bags" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/></a>
				    	</div>
			 	<?php endwhile; ?>
		</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
	<?php endif; ?>
</div>