<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Le styles -->
	<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
	<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-114x114.png">
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


	<div class="centrolog">
            <a href="<?php  echo home_url(); ?>" title="<?php bloginfo('description'); ?>">
                <img src="<?php echo get_option('themnific_logo');?>" alt="<?php bloginfo('name'); ?>" />
            </a>
	</div>


	<div class="container">
		<div class="row">
			<div class="subnav span7" style="margin:20px auto 0; float:none;">
				<?php get_template_part('/includes/uni-navigation');?>
			</div>
		</div>
	</div>


<?php /*if (get_option('themnific_tagline') == "") {} else { ?>
<div id="tagline" class="container body3">
	<div class="row" style="overflow:visible">
        <div class="eightcol">
    			<h1><?php echo get_option('themnific_tagline');?></h1>
        </div>

    
        <div class="fourcol last"></div>
	</div><!--end #header .row-->

    
   <div style="clear: both;"></div>
</div><!--end #tagline-->
<?php }*/ ?>