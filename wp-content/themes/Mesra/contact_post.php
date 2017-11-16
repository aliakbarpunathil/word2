<?php
	require_once('../../../wp-load.php');
	
	$token = wp_mail($_POST['email'], "Message From Member", $_POST['message']);
	
	

if($token)
	$redirect = add_query_arg( 'message', 'success', get_template_directory_uri().'/contact.php' );
else
	$redirect = add_query_arg( 'addevent', 'failed', get_template_directory_uri().'/contact.php' );
	
wp_redirect($redirect);
?>