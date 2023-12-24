<?php
/**
 * Plugin Name: Woocommerce Abandoned Cart Recovery & Reminder
 * Description: Increase your sales by recovering deserted carts and utilizing automated emails to reach out to customers who leave their shopping carts incomplete.
 * Version: 1.0.0
 * Author: Dominic Gitau
 * Author URI: https://dominicn.dev
 * License: GPLv2
 * Text Domain: woo-abandoned-cart-reminder
 * Domain Path: /languages
 * Copyright 2013-2024 dominicn.dev. All rights reserved.
 * Requires at least: 5.0
 * Tested up to: 6.4
 * WC requires at least: 5.0
 * Requires PHP: 7.0
 */

 defined( 'ABSPATH' ) || exit;

/**
 * Include functions related to plugin management.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Get plugin data and store the version inside constant WACR_PLUGIN_VERSION.
 */
$plugindata = get_plugin_data(__FILE__);

/**
 * Get wordpress version and make sure its above 5.0 before activating the plugin.
 */
global $wp_version, $wpdb;

if ( ! defined( 'WACR_PLUGIN_VERSION' ) ) {
    define( 'WACR_PLUGIN_VERSION', $plugindata['Version'] );

    //Database tables for the plugin
    define( 'WACR_PLUGIN_CART_TABLE', $wpdb->prefix . 'wacr_plugin_abandoned_carts' );
    define( 'WACR_PLUGIN_GUEST_TABLE', $wpdb->prefix . 'wacr_plugin_guest_info' );
    define( 'WACR_PLUGIN_EMAIL_TABLE', $wpdb->prefix . 'wacr_plugin_email_history' );
}


if ( ! defined( 'WACR_PLUGIN' ) ) {
    define( 'WACR_PLUGIN', 'woo-abandoned-cart-reminder/woo-abandoned-cart-reminder.php' );
}


if ( ! defined( 'WACR_PLUGIN_DIR' ) ) {
    define( 'WACR_PLUGIN_DIR', plugin_dir_path(__FILE__) );
}

if ( ! defined( 'WACR_PLUGIN_URL' ) ) {
    define( 'WACR_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'WACR_PLUGIN_SLUG' ) ) {
    define( 'WACR_PLUGIN_SLUG', 'woo-abandoned-cart-reminder' );
}

if ( ! defined( 'WACR_WOO_DEPENDANCIES' ) ) {
    define( 'WACR_WOO_DEPENDANCIES', is_plugin_active( 'woocommerce/woocommerce.php' ) && version_compare( $wp_version, $plugindata['RequiresWP'], '>' ) );
}

if ( ! defined( 'WACR_WOO_ERROR' ) ) {
    define( 'WACR_WOO_ERROR', "Please install and activate WooCommerce with WordPress version greater than ".$plugindata['RequiresWP']." to use ".$plugindata['Name']."." );
}

include_once( plugin_dir_path( __FILE__ ) . 'includes/functions.php' );


//Include menu functionality
include_once( plugin_dir_path( __FILE__ ) . 'includes/menu.php' );

/**
 * Check if the plugin is activated and return.
 * 
 * Also ensure woocomerce is active if not deactivate plugin
 * 
 */
if ( is_plugin_active( WACR_PLUGIN ) ) {

	if( !WACR_WOO_DEPENDANCIES){
		wacr_plugin_notify_woo_depend();

		//Deactivate the plugin if woocommerce dependacies is not met
		deactivate_plugins(WACR_PLUGIN);

		$class = 'warning';
		$msg = "The plugin ".$plugindata['Name']." has been deactivated since the required woocommerce plugin is missing.";

		wacr_plugin_update_notice($msg, $class);
	}else{
        //create the tables if not created
        if(!wacr_plugin_check_if_tables_exist())
            wacr_plugin_create_tables();
    }
	return;
}



if ( WACR_WOO_DEPENDANCIES ) {
    // register_activation_hook( __FILE__, 'wacr_plugin__activate' );
} else {
    if ( ! WACR_WOO_DEPENDANCIES ) {
        wacr_plugin_notify_woo_depend();
    }
}

/**
 * Define the activation function to run.
 */
function wacr_plugin__activate(  ) {
	if(!WACR_WOO_DEPENDANCIES){
		wacr_plugin_notify_woo_depend();
		return false;
	};
    //create the tables if not created
    if(!wacr_plugin_check_if_tables_exist())
        wacr_plugin_create_tables();
}

// Uninstall hook: Drop tables on deletion
register_uninstall_hook(__FILE__, 'wacr_plugin__uninstall');

function wacr_plugin__uninstall() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'deserted_carts';
    $wpdb->query("DROP TABLE IF EXISTS $table_name");
}


