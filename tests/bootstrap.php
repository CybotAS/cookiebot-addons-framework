<?php
/**
 * PHPUnit bootstrap file
 *
 * @package Klasse_Plugin_Boilerplate
 */
//
//$_tests_dir = getenv( 'WP_TESTS_DIR' );
//if ( ! $_tests_dir ) {
//	$_tests_dir = '/tmp/wordpress-tests-lib';
//}
//
//// Give access to tests_add_filter() function.
//require_once $_tests_dir . '/includes/functions.php';

/**
 * Manually load the plugin being tested.
 */

require dirname( dirname( __FILE__ ) ) . '/cookiebot-addons-init.php';

// Start up the WP testing environment.
//require $_tests_dir . '/includes/bootstrap.php';
