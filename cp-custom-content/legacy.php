<?php
/**
 * This file contains functions that have been replaced by core functions, but are
 * still needed in older versions of WP
 * 
 */

if(!function_exists('post_type_supports'))
{
	/**
	 * implementation of post_type_supports for WP 2.9
	 */
	function post_type_supports( $post_type, $feature ) {
		global $wp_post_types;
		if (!isset($wp_post_types[$post_type]) || !isset( $wp_post_types[$post_type]->supports) || !isset( $wp_post_types[$post_type]->supports[$feature] ) )
			return false;
	
		return true;
	}
}