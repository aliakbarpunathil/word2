<?php
	require_once('../../../wp-load.php');
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	global $wpdb;
	$token=$wpdb->delete( 'wp_posts', array( 'id' => $_GET['id'])); 

if($token)
	$redirect = add_query_arg( 'delete', 'success', get_template_directory_uri().'/news_list.php' );
else
	$redirect = add_query_arg( 'delete', 'failed', get_template_directory_uri().'/news_list.php' );
	
wp_redirect($redirect);
?>