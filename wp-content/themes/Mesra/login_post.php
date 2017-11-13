<?php
	require_once('../../../wp-load.php');
	
add_action( 'login_post', 'custom_login');
function custom_login() {
	
    $creds = array(
        'user_login'    => $_POST['username'],
        'user_password' => $_POST['password'],
        'remember'      => $_POST['rememberme']
    );
 
    $user = wp_signon( $creds, true );

    if ( is_wp_error( $user ) ) {
        echo $user->get_error_message();
		wp_redirect( get_template_directory_uri().'/admin-login.php' );
    }
	else
		wp_redirect( get_home_url() );
}
do_action(  'login_post' );

?>