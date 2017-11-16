<?php
	require_once('../../../wp-load.php');
	global $wpdb;
	

$token=$wpdb->insert('scroll_news', array(
	'news' => $_POST['news']
);



if($token)
	$redirect = add_query_arg( 'addevent', 'success', get_template_directory_uri().'/news_list.php' );
else
	$redirect = add_query_arg( 'addevent', 'failed', get_template_directory_uri().'/admin_newsevents.php' );
	
wp_redirect($redirect);
?>