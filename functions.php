<?php
/////////////////////////////////////////////////////
//THIS SECTION CREATES NEW POST TYPES
//Custom Post Type "Kunstwerke"
add_action('init', 'create_post_type');
function create_post_type() {
	register_post_type('albertis-kunstwerke',
		array(
		'labels' => array(
			'name' => __('Kunstwerke'),
			'singular_name' => __('Kunstwerk')),
		'public'=> true,
		'has_archive'=>true,
		'rewrite'=>array('slug' => 'kunstwerke'),
		//'supports' => array('title','editor','thumbnail','custom-fields')
		'supports' => array('editor', 'custom-fields')
		)
	);
}

////////////////////////////////////////////////////
//THIS SECTION MODIFIES THE ADMIN MENU AND DASHBOARD
//Change the "Howdy, admin" to something more serious
function replace_howdy($wp_admin_bar){
	$my_account=$wp_admin_bar->get_node('my-account');
	$newtitle=str_replace('Howdy,', 'Willkommen,', $my_account->title);
	$wp_admin_bar->add_node(array(
		'id'=>'my-account',
		'title'=>$newtitle,
		));
}
add_filter('admin_bar_menu', 'replace_howdy', 25);

//Add "Neues Kunstwerk" in the Top Menu Bar
function wp_admin_bar_new_item(){
	global $wp_admin_bar;
	$wp_admin_bar->add_menu(array(
		'id'=>'wp-admin-bar-new-item',
		'title'=>__("Kunstwerk hinzuf&uuml;gen"),
		'href'=>'http://localhost:8888/test/wp-admin/post-new.php?post_type=albertis-kunstwerke'
		));
}
add_action('wp_before_admin_bar_render', 'wp_admin_bar_new_item');

///////////////////////////////////////////////////////
//THIS SECTION IS FOR TEMPLATING FUNCTIONS
//Add Sidebar
if (function_exists("register_sidebar"))
	register_sidebar();

//Later on delete "Comments", "+New" for User Role Borisch 
//Also Change Logo
?>
