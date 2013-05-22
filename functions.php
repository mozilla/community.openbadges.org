<?php

/*
 * Remove default WordPress header hooks
 */

remove_action('wp_head', 'feed_links_extra',                 3   );
remove_action('wp_head', 'rsd_link'                              );
remove_action('wp_head', 'wlwmanifest_link'                      );
remove_action('wp_head', 'noindex',                          1   );
remove_action('wp_head', 'wp_generator'                          );
remove_action('wp_head', 'wp_shortlink_wp_head',            10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


/*
 * Remove other silly WordPress hooks
 */

remove_filter('the_content', 'wpautop');



/*
 * Clean up WordPress generated tags, which have a propensity to use single quotes!
 */

function openbadges_clean_tag ($tag) {
	$tag = preg_replace('|=\'([^\']*)\'( +)?|', '="$1" ', $tag);
	$tag = preg_replace('|\s+/?(>\s*)$|', '$1', $tag);
	return $tag;
}

add_action('style_loader_tag', 'openbadges_clean_tag', 1);


/*
 * Set up widgets
 */

function openbadges_setup_widgets () {
	register_sidebar(array(
		'name' => __('Footer', 'openbadges'),
		'id' => 'footer',
		'description' => __('Appears at the bottom of every page', 'openbadges'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}

add_action('widgets_init', 'openbadges_setup_widgets');


/*
 * Set up menus
 */

function openbadges_setup_menus () {
	register_nav_menus(array(
		'primary' => __('Main Menu', 'openbadges'),
		'footer' => __('Secondary Footer Menu', 'openbadges'),
	));
}

add_action('after_setup_theme', 'openbadges_setup_menus');


/*
 * Set up admin config
 */

function openbadges_admin_init () {
	require_once(dirname(__FILE__).'/admin/init.php');
}

add_action('admin_init', 'openbadges_admin_init');



/*
 * Load Scripts
 */
add_action( 'wp_enqueue_scripts', 'load_scripts' );
function load_scripts() {
	wp_enqueue_script('tabzilla', '//www.mozilla.org/tabzilla/media/js/tabzilla.js', '','',true);
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, '1.9.1');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('global-logic', get_template_directory_uri() . '/media/js/global.js', 'jquery','',true);
	wp_register_style( 'core-styles', get_template_directory_uri() . '/media/css/core.css', array(), '1.1', 'all' );
  	wp_register_style( 'tabzilla-styles', 'http://mozorg.cdn.mozilla.net/media/css/tabzilla-min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'core-styles' );
	wp_enqueue_style( 'tabzilla-styles' );
}




?>