<?php
	require_once('../../../wp-load.php');
	global $wpdb;
	
	$file = $_FILES['profile_pic'];
	if($file['error'] === UPLOAD_ERR_OK)		
		{
	/*	if ($input_file['size'] > 307200) */
		$upload_overrides = array( 'test_form' => false );
		$movefile = wp_handle_upload( $file, $upload_overrides);
		$url=$movefile['url'];
		}
		
	$userdata = array(
    'user_login'  =>  $_POST['login_name'],
    'user_pass'   =>  $_POST['password'],  // When creating an user, `user_pass` is expected.
	'user_email' =>$_POST['email'],
	'role' => 'subscriber'
	);
	$user_id=wp_insert_user( $userdata );
	if($user_id){
	$token=$wpdb->insert('wp_user_details', array(
    'user_id' => $user_id,
    'name' => $_POST['name'],
	'occupation' => $_POST['occupation'],
	'paddress' => $_POST['paddress'],
	'oaddress' => $_POST['oaddress'],
	'phone' => $_POST['phone'],
	'mobile' => $_POST['mobile'],
	'email1' => $_POST['email1'],
	'email2' => $_POST['email2'],
	'admsn_no' => $_POST['admsn_no'],
	'year' => $_POST['year'],
	'passout10' => $_POST['passout10'],
	'passout12' => $_POST['passout12'],
	'passout_o' => $_POST['passout_o'],
	'profile_pic' => $url
));
}
if($token){
	$to = $_POST['email'];
	$subject = "Profile Created";
	$message = "Your Profile for Mesra Created. Please wait for Administrator approval for login";
	$headers = array('Content-Type: text/html; charset=UTF-8; From : Administrator');
	wp_mail( $to, $subject, $message);
}

if($token)
	$redirect = add_query_arg( 'addevent', 'success', get_template_directory_uri().'/news_list.php' );
else
	$redirect = add_query_arg( 'addevent', 'failed', get_template_directory_uri().'/admin_newsevents.php' );
	
wp_redirect($redirect);
	?>

   