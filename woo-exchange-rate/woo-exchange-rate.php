<?php
/*
 * Plugin Name: Multi Currency, Currency Switcher, Exchange Rates for WooCommerce - Mudra
 * Description: Allows to add exchange rates for WooCommerce
 * Plugin URI: https://wordpress.org/plugins/woo-exchange-rate/
 * Version: 17.5.0
 * Author: Codeixer
 * Text Domain: woo-exchange-rate
 * Author URI: https://codeixer.com
 * Tested up to: 6.8.1
 * Requires at least: 6.0
 * WC requires at least: 5.0
 * WC tested up to: 9.9.4
 * Requires PHP: 7.4
 * Requires Plugins: woocommerce
 * License: GPLv2 or later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Help handle assets
define( 'WOOER_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WOOER_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

/**
 * Includes autoloader
 */
require_once __DIR__ . '/vendor/autoload.php';

add_action(
	'before_woocommerce_init',
	function () {
		if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
		}
		if ( class_exists( '\Automattic\WooCommerce\Utilities\FeaturesUtil' ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'cart_checkout_blocks', __FILE__, true );
		}
	}
);

/**
 * Plugin setup hooks
 */
register_activation_hook( __FILE__, 'wooer_install' );
register_uninstall_hook( __FILE__, 'wooer_uninstall' );


use WOOER\Main;
new Main();
