<?php
/**
 * Plugin Name: Woocommerce Abandoned Cart Recovery & Reminder
 * Description: Increase your sales by recovering deserted carts and utilizing automated emails to reach out to customers who leave their shopping carts incomplete.
 * Version: 1.0.0
 * Author: Dominic Gitau
 * Author URI: https://dominicn.dev
 * Text Domain: woo-abandoned-cart-reminder
 * Domain Path: /languages
 * Copyright 2013-2024 dominicn.dev. All rights reserved.
 * Requires at least: 5.0
 * Tested up to: 6.4
 * WC requires at least: 5.0
 * WC tested up to: 8.4.0
 * Requires PHP: 7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Include functions related to plugin management.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Get plugin data and store the version inside constant WACR_PLUGIN_VERSION.
 */
$plugindata = get_plugin_data(__FILE__);

if ( ! defined( 'WACR_PLUGIN_VERSION' ) ) {
    define( 'WACR_PLUGIN_VERSION', $plugindata['Version'] );
}
if ( ! defined( 'WACR_PLUGIN_SLUG' ) ) {
    define( 'WACR_PLUGIN_SLUG', 'woo-abandoned-cart-reminder' );
}

/**
 * Check if the plugin is activated and return.
 */
if ( is_plugin_active( 'woo-abandoned-cart-reminder/woo-abandoned-cart-reminder.php' ) ) {
	return;
}

/**
 * Get wordpress version and make sure its above 5.0 before activating the plugin.
 */
global $wp_version;

if ( is_plugin_active( 'woocommerce/woocommerce.php' ) && version_compare( $wp_version, '5.0', '>' ) ) {

} else {
	if ( ! function_exists( 'wacr_plugin_notification' ) ) {
		function wacr_plugin_notification() {
			?>
            <div id="message" class="error">
                <p><?php _e( "Please install and activate WooCommerce to use ".$plugindata['Name'].".", WACR_PLUGIN_SLUG ); ?></p>
            </div>
			<?php
		}
	}
	add_action( 'admin_notices', 'wacr_plugin_notification' );
}

