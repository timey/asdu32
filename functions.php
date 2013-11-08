<?php

add_action('init', 'create_post_type');

function create_post_type() {
	register_post_type('albertis-landingpage',
		array(
		'labels' => array(
			'name' => __('Landingpage'),
			'singular_name' => __('Landingpage')),
		'public'=> true,
		'has_archive'=>true,
		'rewrite'=>array('slug' => 'landingpage'),
		//'supports' => array('title','editor','thumbnail','custom-fields')
		'supports' => array('custom-fields')
		)
	);
}

?>

<?php 



function reset_editor()
{
     global $_wp_post_type_features;

     $post_type="albertis-landingpage";
     $feature = "editor";
     if ( !isset($_wp_post_type_features[$post_type]) )
     {

     }
     elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
     unset($_wp_post_type_features[$post_type][$feature]);
}

add_action('init', 'reset_editor');
?>


<?php if (function_exists("register_sidebar"))
	register_sidebar();
?>