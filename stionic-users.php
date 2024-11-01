<?php
/**
 * Plugin Name: Stionic Users
 * Plugin URI: https://noncheat.com/category/plugins/stionic-users/
 * Description: Users API for Wordpress application
 * Version: 1.0.2
 * Author: Noncheat
 * Author URI: https://noncheat.com
 * Requires at least: 4.7
 * Tested up to: 5.9
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Stionic_Users{
	public function __construct() {
		// require endpoints
		require_once('endpoints/class-stionic-users.php');
		require_once('endpoints/class-stionic-facebook.php');
		// require hooks
		require_once('hooks/class-stionic-jwt.php');
		// require includes
		require_once('includes/class-stionic-users.php');
	}
}
new Stionic_Users();