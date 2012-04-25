<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />


<!-- load main css stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- google webfonts -->
<?php if (get_option('themnific_dis_goofonts') <> "true") { ?>
<link href='http://fonts.googleapis.com/css?family=Jockey+One|Quicksand:400,300,700|Terminal+Dosis:400,800,300,600|Sansita+One|Changa+One|Paytone+One|Dorsa|Rochester|Bigshot+One|Open+Sans+Condensed:300|Merienda+One|Six+Caps|Bevan|Oswald|Vidaloka|Droid+Sans|Josefin+Sans|Dancing+Script:400,700|Abel|Rokkitt|Droid+Serif' rel='stylesheet' type='text/css'/>
<?php } ?>

<?php wp_head(); ?>
<?php themnific_head(); ?>

</head>

     
<body <?php body_class(); ?>>

<div class="container bbfl">
	<div class="row">
		<div class="fourcol">
            <a href="<?php  echo home_url(); ?>" title="<?php bloginfo('description'); ?>">
                <img src="<?php echo get_option('themnific_logo');?>" alt="<?php bloginfo('name'); ?>" />
            </a>
		</div>
		<div class="eightcol last inn-img-right"><img src="<?php  bloginfo("template_url"); ?>/images/mision.png" /></div>
		<div class="eightcol last" style="width:90%">
            <div id="navigation">
                    <?php get_template_part('/includes/uni-navigation');?>
            </div><!--end #navigation-->	
		</div>
	</div>
</div>

<?php if (get_option('themnific_tagline') == "") {} else { ?>
<div id="tagline" class="container body3">
	<div class="row" style="overflow:visible">
        <div class="eightcol">
    			<h1><?php echo get_option('themnific_tagline');?></h1>
        </div>

    
        <div class="fourcol last"></div>
	</div><!--end #header .row-->

    
   <div style="clear: both;"></div>
</div><!--end #tagline-->
<?php } ?>