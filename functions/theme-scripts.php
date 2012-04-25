<?php
if ( ! is_admin() ) { add_action( 'wp_print_scripts', 'themnific_add_javascript' ); }

if ( ! function_exists( 'themnific_add_javascript' ) ) {
	function themnific_add_javascript() {

		// Load Common scripts	
		//wp_enqueue_script('jquery-1.6.1.min', get_stylesheet_directory_uri() .'/js/jquery-1.6.1.min.js');
		//wp_enqueue_script( 'superfish', get_template_directory_uri().'/js/superfish.js');
		//wp_enqueue_script( 'jquery.hoverIntent.minified', get_template_directory_uri().'/js/jquery.hoverIntent.minified.js');
		//wp_enqueue_script( 'css3-mediaqueries', get_template_directory_uri().'/js/css3-mediaqueries.js');
		//wp_enqueue_script('ownScript', get_stylesheet_directory_uri() .'/js/ownScript.js','','', true);

		// // Load Slider scripts		
		// if (get_option('themnific_slider_dis') <> "true") { 
		// 	if ( is_page_template('template-blog.php') || is_home()) { 
		// 		wp_enqueue_script('jquery.flexslider-min', get_stylesheet_directory_uri() .'/js/jquery.flexslider-min.js');
		// 		wp_enqueue_script('slider.start', get_stylesheet_directory_uri() .'/js/slider.start.js');
		// 	} 
		// }
		
		// // Tabs script		
		// if (get_option('themnific_dis_tabs') <> "true") {  
		// 		wp_enqueue_script('tabs', get_stylesheet_directory_uri() .'/js/tabs.js');
		// }


wp_enqueue_script('jquery-1.7.2.min', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
wp_enqueue_script('transition','https://raw.github.com/unoraya/bootstrap/master/js/bootstrap-transition.js');
wp_enqueue_script('alert','https://raw.github.com/unoraya/bootstrap/master/js/bootstrap-alert.js');
wp_enqueue_script('modal','https://raw.github.com/unoraya/bootstrap/master/js/bootstrap-modal.js');
wp_enqueue_script('dropdown','https://raw.github.com/unoraya/bootstrap/master/js/bootstrap-dropdown.js');
wp_enqueue_script('scrollspy','https://raw.github.com/unoraya/bootstrap/master/js/bootstrap-scrollspy.js');
wp_enqueue_script('tab','https://raw.github.com/unoraya/bootstrap/master/js/bootstrap-tab.js');
wp_enqueue_script('tooltip','https://raw.github.com/unoraya/bootstrap/master/js/bootstrap-tooltip.js');
wp_enqueue_script('popover','https://raw.github.com/unoraya/bootstrap/master/js/bootstrap-popover.js');
wp_enqueue_script('button','https://raw.github.com/unoraya/bootstrap/master/js/bootstrap-button.js');
wp_enqueue_script('collapse','https://raw.github.com/unoraya/bootstrap/master/js/bootstrap-collapse.js');
wp_enqueue_script('carousel','https://raw.github.com/unoraya/bootstrap/master/js/bootstrap-carousel.js');
wp_enqueue_script('typeahead','https://raw.github.com/unoraya/bootstrap/master/js/bootstrap-typeahead.js');



		
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	}
}
?>