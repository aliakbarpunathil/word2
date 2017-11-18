<?php
	require_once('../../../wp-load.php');
	global $wpdb;
	

	
	$token=$wpdb->update('wp_user_details', array(
   
	'active' => 1
),
array(
	'user_id' => $_GET['user_id']
)
);

if($token)
	$redirect = add_query_arg( 'addevent', 'success', get_template_directory_uri().'/member_list.php' );
else
	$redirect = add_query_arg( 'addevent', 'failed', get_template_directory_uri().'/member_list.php' );
	
wp_redirect($redirect);
?>