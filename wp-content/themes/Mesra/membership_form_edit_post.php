<?php
	require_once('../../../wp-load.php');
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	
	global $wpdb;
	$url = get_home_url().'/wp-content/uploads/user.jpg'
	$file = $_FILES['fileupload'];
	if($file['error'] === UPLOAD_ERR_OK)		
		{
			echo "hello";
	/*	if ($input_file['size'] > 307200) */
		$upload_overrides = array( 'test_form' => false );
		$movefile = wp_handle_upload( $file, $upload_overrides);
		$url=$movefile['url'];
		}
		
/*	$userdata = array(
    'user_login'  =>  $_POST['login_name'],
    'user_pass'   =>  $_POST['password'],  // When creating an user, `user_pass` is expected.
	'user_email' =>$_POST['email'],
	'role' => 'subscriber'
	);
	$user_id=wp_insert_user( $userdata );
	*/
	
	$token=$wpdb->update('wp_user_details', array(
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
),

array(

	'user_id' => $_POST['user_id'],

	)
);

if($token){
	$to = $_POST['email'];
	$subject = "Profile Created";
	$message = "Your Profile for Mesra Created. Please wait for Administrator approval for login";
	$headers = array('Content-Type: text/html; charset=UTF-8; From : Administrator');
	wp_mail( $to, $subject, $message);
}

if($token)
	$redirect = add_query_arg( 'addmember', 'success', get_template_directory_uri().'/member_list.php' );
else
	$redirect = add_query_arg( 'addmember', 'failed', get_template_directory_uri().'/membership_form.php' );
	
wp_redirect($redirect);
	?>

   