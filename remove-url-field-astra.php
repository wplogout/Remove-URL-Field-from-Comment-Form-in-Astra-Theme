<?php
/* 
Plugin Name: Remove URL Field from Comment Form in Astra Theme
Plugin URI: https://wordpress.org/plugins/remove-url-field-from-comment-form-in-astra-theme/
Description: This plugin helps to remove URL Field from comment form in Astra Theme.
Version: 1.0.0
Author: Suraj Katwal
Author URI: https://www.wplogout.com/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

add_filter( 'astra_comment_form_default_fields_markup', 'wplogout_remove_comment_website_field', 99 );

function wplogout_remove_comment_website_field( $fields ) {
	unset( $fields['url'] );
	
	return $fields;
}