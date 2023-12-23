<?php
$transient_key = 'wacr_admin_notification';
    
// Check if the transient already exists
if (get_transient($transient_key)) {
	delete_transient($transient_key);
}


if (!function_exists('wacr_plugin_notification')) {

	/*
	 * Function to display a notification in the WordPress admin.
	 * 
	 * Depends on the values of globally set variables noti_msg and noti_class
	 * 
	 */
    function wacr_plugin_notification() {

        $transient_key = 'wacr_admin_notification';
        $notification_data = get_transient($transient_key);

		foreach($notification_data as $data):
			if(isset($data['msg'])):
			
				$msg = !isset($data['msg']) || empty($data['msg'])?'No error message specified':$data['msg'];
				$class = !isset($data['class']) || empty($data['class'])?'error':$data['class'];
				?>
					<div class="notice-<?php echo esc_attr($class); ?> notice is-dismissible">
						<p><?php  _e( $msg, WACR_PLUGIN_SLUG ); ?></p>
						<button type="button" class="notice-dismiss">
							<span class="screen-reader-text">Dismiss this notice.</span>
						</button>
					</div>
				<?php
			endif;
		endforeach;

		delete_transient($transient_key);
    }
}
if (!function_exists('wacr_plugin_update_notice')) {

	/*
	 * update errors and notices for admin in transient.
	 * 
	 */
	function wacr_plugin_update_notice($msg, $class='error'){

		$transient_key = 'wacr_admin_notification';

		$data = get_transient($transient_key);
		$data = empty($data) || !is_array($data)?[]:$data;

		$data [] = ['msg'=> $msg, 'class' => $class];

		set_transient($transient_key, $data, 30);

		add_action('admin_notices', 'wacr_plugin_notification',999);
	}
}

if (!function_exists('wacr_plugin_create_tables')) {

	/*
	 * Create tables for the plugin to use.
	 * 
	 */
	function wacr_plugin_create_tables(){

		global $wpdb;
		$wcar_collate = '';

		if ( $wpdb->has_cap( 'collation' ) ) {
			$wcar_collate = $wpdb->get_charset_collate();
		}

		$sql = "CREATE TABLE IF NOT EXISTS ".WACR_PLUGIN_CART_TABLE." (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`user_id` int(11) NOT NULL,
			`abandoned_cart_info` text COLLATE utf8_unicode_ci NOT NULL,
			`abandoned_cart_time` int(11) NOT NULL,
			`current_lang` text,
			`cart_ignored` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
			`recovered_cart` int(11) NOT NULL,
			`recovered_cart_time` int(11) NOT NULL,
			`order_type` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
			`user_type` text,
			`unsubscribe_link` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
			`session_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
			`send_mail_time` int(11),
			`number_of_mailing` int(3) NOT NULL,
			`email_complete` enum('0','1'),
			`messenger_sent` int(3) NOT NULL,
			`messenger_complete` enum('0','1'),
			`customer_ip` tinytext COLLATE utf8_unicode_ci,
			`os_platform` tinytext COLLATE utf8_unicode_ci,
			`browser` tinytext COLLATE utf8_unicode_ci,
			PRIMARY KEY  (`id`)
			) $wcar_collate";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );

		$sql = "CREATE TABLE IF NOT EXISTS ".WACR_PLUGIN_GUEST_TABLE." (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`user_ref` text,
			`ip` tinytext,
			`os` tinytext,
			`browser` tinytext,
			`billing_first_name` text,
			`billing_last_name` text,
			`billing_company` text,
			`billing_address_1` text,
			`billing_address_2` text,
			`billing_city` text,
			`billing_country` text,
			`billing_postcode` text,
			`billing_email` text,
			`billing_phone` text,
			`ship_to_billing` text,
			`order_notes` text,
			`shipping_first_name` text,
			`shipping_last_name` text,
			`shipping_company` text,
			`shipping_address_1` text,
			`shipping_address_2` text,
			`shipping_city` text,
			`shipping_country` text,
			`shipping_postcode` double,
			`shipping_charges` double,
			PRIMARY KEY  (`id`)
			) $wcar_collate";
		dbDelta( $sql );

		$sql = "CREATE TABLE IF NOT EXISTS ".WACR_PLUGIN_EMAIL_TABLE." (
			`id` int(11) NOT NULL auto_increment,
			`type` tinytext  COLLATE utf8_unicode_ci,
			`billing_email` varchar(50) collate utf8_unicode_ci,
			`template_id` varchar(40) collate utf8_unicode_ci NOT NULL,
			`acr_id` int(11) NOT NULL,
			`sent_time` int(11) NOT NULL,
			`clicked` int(11),
			`opened` int(11) ,
			`coupon` tinytext COLLATE utf8_unicode_ci,
			`sent_email_id` tinytext COLLATE utf8_unicode_ci,
			PRIMARY KEY  (`id`)
			) $wcar_collate AUTO_INCREMENT=1 ";

		dbDelta( $sql );
	}
}

if(!function_exists('wacr_plugin_check_if_tables_exist')){

	/*
	* Check if tables exists and return true if so if one misses then false
	*/
	function wacr_plugin_check_if_tables_exist($tables = [WACR_PLUGIN_CART_TABLE, WACR_PLUGIN_GUEST_TABLE, WACR_PLUGIN_EMAIL_TABLE]){
		global $wpdb;
		$exist = true;
		if(is_array($tables) && count($tables) > 0):
			foreach($tables as $table){
				$sql = "SHOW TABLES LIKE '$table'";
				$table_exists = $wpdb->get_var($sql);

				if ($table_exists != $table) {
					$exist = false;
					break;
				} 
			}
		endif;

		return $exist;
	}
}


if (!function_exists('wacr_plugin_notify_woo_depend')) {

	/*
	 * wacr_plugin_notify_woo_depend to set an error message related to WooCommerce dependency.
	 * 
	 */
	function wacr_plugin_notify_woo_depend(){
		wacr_plugin_update_notice(WACR_WOO_ERROR);
	}
}