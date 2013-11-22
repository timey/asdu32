<!DOCTYPE html>
<html >
<head profile="http://gmpg.org/xfn/11">
	<meta http-equic="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/reset.css" type="text/css" media="screen" title="alternate" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>

</head>

<body>
	

	<header>
		<div class="box_logo col span_4_of_12">
			<img src="<?php bloginfo('template_url'); ?>/img/logo_albertis.png">
		</div>
		<nav class="span_8_of_12">
			<?php wp_nav_menu(array('theme_location'=>'header-menu')); ?>
		</nav>
		<div class="clearfix"></div>
	</header><!-- header -->