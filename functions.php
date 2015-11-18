<?php
/**
 * enzoculiolo1.0 functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage enzoculiolo1.0
 * @since 2015
 */


// ========================================
// Grab custom functions
// If you are going to create a utility method
// go here and make it.
// ========================================
include('includes/walker_nav_menu.php');


// ========================================
// Remove the basic "Posts" menu from the Admin area.
// http://www.wprecipes.com/how-to-remove-menus-in-wordpress-dashboard
// ========================================
add_action('admin_menu', 'remove_menus');
function remove_menus ()
{
	global $menu;
	$restricted = array(__('Posts'), __('Links'), __('Comments'));
	end ($menu);

	while (prev($menu))
	{
		$value = explode(' ',$menu[key($menu)][0]);
		if (in_array($value[0] != NULL?$value[0]:"" , $restricted))
		{
			unset($menu[key($menu)]);
		}
	}
}


// ========================================
// Remove links/menus from the admin bar
// ========================================
add_action( 'wp_before_admin_bar_render', 'admin_bar_render' );
function admin_bar_render()
{
	global $wp_admin_bar;
	$remove_menus = array('comments','new-content','appearance');
	foreach($remove_menus as $k => $v) $wp_admin_bar->remove_menu($v);
}


// ========================================
// Enables the "Menu" option in the Wordpress Backend
// https://codex.wordpress.org/Navigation_Menus
// ========================================
if (function_exists('register_nav_menus')) { register_nav_menus(array('main_nav'=>'Main Navigation Menu')); }


// ========================================
// Replace nav current class with active
// ========================================
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item)
{
	if ( in_array('current-menu-item', $classes) )
	{
		$classes[] = 'active ';
	}

	return $classes;
}


// ========================================
// Remove junk from head
// ========================================
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


// ========================================
// Add google analytics to footer
// ========================================
add_action('wp_footer', 'add_google_analytics');
function add_google_analytics()
{
	echo "<script>var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-36986639-1']);_gaq.push(['_trackPageview']);(function(d,t) {var ga=d.createElement(t),s=d.getElementsByTagName(t)[0];ga.async=ga.src=('https:'==d.location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';s.parentNode.insertBefore(ga,s);})(document,'script');</script>";
}



?>