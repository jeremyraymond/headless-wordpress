<?php
/**
 * Plugin Name: Transfer DB
 * Plugin URI: http://jeremy-raymond.com
 * Description: This plugin allows you to quickly and easily transfer DB content from one Wordpress site to another.
 * Version: 1.0.0
 * Author: Jeremy Raymond
 * Author URI: http://jeremy-raymond.com
 * License: GPL2
 */

add_action('admin_menu', 'transfer_db_menu');

function transfer_db_menu() {
	add_submenu_page( 'tools.php', 'Transfer DB', 'Transfer DB', 'administrator', 'transfer-db', 'transfer_db_page' );
}

function transfer_db_page() {
	$path = dirname();
	include $path . 'settings-form.php';
}

add_action( 'admin_init', 'transfer_db_settings' );

function transfer_db_settings() {
	register_setting( 'transfer-db-settings-group', 'accountant_name' );
	register_setting( 'transfer-db-settings-group', 'accountant_phone' );
	register_setting( 'transfer-db-settings-group', 'accountant_email' );
}