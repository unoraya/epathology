<div id="slide-warp">
<?php 
	$featucat = get_option('themnific_slider1_category');
	$my_query = new WP_Query('showposts=5&orderby=date');	 
	if ($my_query->have_posts()) :
?>
  
    <div class="flexslider">
		    <ul class="slides">
				<?php while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	  
				    	<li>
			    <a href="<?php the_permalink(); ?>">
			    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'folio-image'); ?>
			    <img class="bags" src="<?php echo get_template_directory_uri(); ?>/js/timthumb.php?src=<?php echo $image[0]; ?>&amp;w=700&amp;h=350" alt="<?php the_title(); ?>"/></a>
				    		<h2 class="flex-caption"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				    	</li>
			 	<?php endwhile; ?>
		    </ul>
	</div>

<?php endif; ?></div>