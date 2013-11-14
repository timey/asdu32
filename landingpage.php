<?php /*Template Name: Landingpage */ ?>

<!DOCTYPE html>
<html >
<head profile="http://gmpg.org/xfn/11">
	<meta http-equic="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/reset.css" type="text/css" media="screen" title="alternate" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/css/landingpage.css" type="text/css" media="screen" title="alternate" />
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
	</header><!-- header -->

	<div id="wrapper">

		<section class="ueber_uns teaser_landingpage col span_12_of_12">
			<div class="teaser_landingpage col span_8_of_12">
				<?php while(have_posts()):the_post();?>
					<h2><?php the_field('titel_box_ueber_uns'); ?></h2>
					<p><?php the_field('ueber_uns'); ?></p>
				<?php endwhile; ?>
			</div>
			<img class="avatar span_4_of_12" src='<?php bloginfo('template_url'); ?>/img/borisch.png' alt="Harald Borisch"/>
		</section><!--Über Uns-->
		
		<section class="">
			<div class="teaser_landingpage col span_4_of_12">
				<?php while(have_posts()):the_post();?>
					<h2><?php the_field('titel_box_kunstwerke'); ?></h2>
					<p><?php the_field('kunstwerke'); ?></p>
				<?php endwhile; ?>
			</div>
			<div class="teaser_landingpage col span_4_of_12">
				<?php while(have_posts()):the_post();?>
					<h2><?php the_field('titel_box_bewertung'); ?></h2>
					<p><?php the_field('bewertung'); ?></p>
				<?php endwhile; ?>
			</div>
			<div class="teaser_landingpage col span_4_of_12">
				<?php while(have_posts()):the_post();?>
					<h2><?php the_field('titel_box_restaurierung'); ?></h2>
					<p><?php the_field('restaurierung'); ?></p>
				<?php endwhile; ?>
			</div>
		</section>



	<!--Backstretch-->
	<!--
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/backstretch.js"></script>
	<script type="text/javascript">
		$.backstretch("<?php bloginfo('template_url'); ?>/img/bg.jpg");
	</script> -->


	<!--WP FOOTER to display Admin Bar -->
	<?php get_footer(); ?>

</body>

</html>
