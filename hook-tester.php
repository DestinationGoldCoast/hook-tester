<?php
/**
 * Plugin Name: Hook Tester
 *
 * This plugin is to be used with the dgc theme in a development environment only.
 * It gives the developer a visual indication on the location of each hook
 * that is built into the dgc theme.
 *
 * @package Hook_Tester
 * @since 	1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly.
endif;

$dgc_theme_text_domain = wp_get_theme()->get( 'TextDomain' );
/**
 * Check if DGC Theme is active.
 *
 * @since 1.0.0
 * @param string $dgc_theme_text_domain is the active theme Text Domain.
 * @return boolean.
 */
if ( 'dgc' === $dgc_theme_text_domain ) :
	hook_test_require();
else :
	var_dump( 'The DGC theme is not the current active theme.' );
endif;

/**
 * Require in the controller class.
 *
 * @since 1.0.0
 */
function hook_test_require() {
	require_once plugin_dir_path( __FILE__ ) . 'controller/class-hook-tester.php';
}

