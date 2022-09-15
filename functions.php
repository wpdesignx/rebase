<?php
/**
 * Base functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Base
 */

define( 'REBASE_VERSION', '1.0.0' );
define( 'REBASE_MINIMUM_WP_VERSION', '5.4' );
define( 'REBASE_MINIMUM_PHP_VERSION', '7.2' );

// Bail if requirements are not met.
if ( version_compare( $GLOBALS['wp_version'], REBASE_MINIMUM_WP_VERSION, '<' ) || version_compare( phpversion(), REBASE_MINIMUM_PHP_VERSION, '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}
// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Load the `webapp()` entry point function.
require get_template_directory() . '/inc/class-theme.php';

// Load the `webapp()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func( 'Base\webapp' );
