<?php
	require_once('../../../wp-load.php');
	global $wpdb;
	$url = "";
	$file = $_FILES['fileupload'];
	if($file['error'] === UPLOAD_ERR_OK)		
		{
	/*	if ($input_file['size'] > 307200) */
		$upload_overrides = array( 'test_form' => false );
		$movefile = wp_handle_upload( $file, $upload_overrides);
		$url=$movefile['url'];
		}
if($url == ""){
$token=$wpdb->update('wp_posts', array(
	'post_author' => get_current_user_id(),
	'post_date' => date('Y-m-d', $_POST['pdate']),
	'post_content' => $_POST['comments'],
	'post_title' => $_POST['news_heading']
	),
	array( 'id' => $id ) 
);
}
else{
$token=$wpdb->update('wp_posts', array(
	'post_author' => get_current_user_id(),
	'post_date' => date('Y-m-d', $_POST['pdate']),
	'post_content' => $_POST['comments'],
	'post_title' => $_POST['news_heading']
	'guid' => $_POST['$url'];
	),
	array( 'id' => $id ) 
);
}

if($token)
	$redirect = add_query_arg( 'addevent', 'success', get_template_directory_uri().'/news_list.php' );
else
	$redirect = add_query_arg( 'addevent', 'failed', get_template_directory_uri().'/admin_newsevents.php' );
	
wp_redirect($redirect);
?>