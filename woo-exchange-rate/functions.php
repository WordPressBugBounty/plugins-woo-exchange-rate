<?php

use WOOER\Main;
use CodesVault\Howdyqb\DB;
use WOOER\Exchange_Rate_Model;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}



/**
 * Installation function
 */
function wooer_install() {
	global $wpdb;
	require_once ABSPATH . '/wp-admin/includes/plugin.php';

	$table_name = Exchange_Rate_Model::get_instance()->get_table_name();

	// $sql = 'CREATE TABLE IF NOT EXISTS ' . $table_name . " (
	// `id` mediumint(9) AUTO_INCREMENT PRIMARY KEY,
	// `currency_code` varchar(3) NOT NULL,
	// `currency_pos` varchar(32) NOT NULL DEFAULT 'left',
	// `currency_exchange_rate` decimal(16,4) NOT NULL
	// );";
	// $wpdb->query( $sql );

	// Check if the table exists
	$db = new DB( 'wpdb' );
	
	// phpcs:ignore WordPress.DB.DirectDatabaseQuery.NoCaching, WordPress.DB.DirectDatabaseQuery.DirectQuery
	$table_key_map = $wpdb->get_var( $wpdb->prepare( "SHOW TABLES LIKE %s", $table_name ) ) === $table_name;
	if ( ! $table_key_map ) {
		$db::create( 'woocommerce_exchange_rate' )
			->column( 'id' )->bigInt( 20 )->unsigned()->autoIncrement()->primary()->required()
			->column( 'currency_code' )->string( 3 )
			->column( 'currency_pos' )->string( 255 )->default( 'left' )->required()
			->column( 'currency_exchange_rate' )->double( 16, 4 )->required()
			->index( array( 'id' ) )
			->execute();
	}

	Main::save_plugin_db_version();
}



/**
 * Uninstall function
 */
function wooer_uninstall() {
	// TODO: add db cleanup code
	// $db = new DB('wpdb');
	// $db::drop('woocommerce_exchange_rate');
	delete_option( 'wooer_plugin_version' );
}
