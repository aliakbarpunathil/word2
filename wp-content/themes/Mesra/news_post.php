<?php
	require_once('../../../wp-load.php');
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	global $wpdb;
	
	$file = $_FILES['fileupload'];
	if($file['error'] === UPLOAD_ERR_OK)		
		{
	/*	if ($input_file['size'] > 307200) */
		$upload_overrides = array( 'test_form' => false );
		$movefile = wp_handle_upload( $file, $upload_overrides);
		$url=$movefile['url'];
		}
	
	$token=$wpdb->insert('wp_posts', array(
    'post_author' => get_current_user_id(),
    'post_date' => $_POST['pdate'],
	'post_content' => $_POST['comments'],
	'post_title' => $_POST['news_heading'],
	'guid' => $url
));

if($token)
	$redirect = add_query_arg( 'addevent', 'success', get_template_directory_uri().'/news_list.php' );
else
	$redirect = add_query_arg( 'addevent', 'failed', get_template_directory_uri().'/admin_newsevents.php' );
	
wp_redirect($redirect);
?>