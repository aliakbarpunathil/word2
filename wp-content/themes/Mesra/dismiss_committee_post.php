<?php
	require_once('../../../wp-load.php');
	global $wpdb;
	

	$wpdb->update('user_roles', array(
	'to_date' => GETDATE(),
	),
	array( 'to_date' => NULL ) 
);	

if($token)
	$redirect = add_query_arg( 'dismiss', 'success', get_template_directory_uri().'/excommitte.php' );
else
	$redirect = add_query_arg( 'dismiss', 'failed', get_template_directory_uri().'/excommitte.php' );
	
wp_redirect($redirect);
?>