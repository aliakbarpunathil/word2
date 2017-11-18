<?php
require( '../../../wp-load.php' );
if ( ! function_exists( 'wp_handle_upload' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
}
global $wpdb;



$files  = rearray($_FILES['files']);
	foreach($files as $input_file){
	if ($input_file['error'] === UPLOAD_ERR_OK) { 	
		
	/*	if ($input_file['size'] > 307200) */
		$upload_overrides = array( 'test_form' => false );
		$movefile = wp_handle_upload( $file, $upload_overrides);
		$url=$movefile['url'];
		echo $url;
		die;
	$token=$wpdb->insert('wp_gallery', array(
    'author' => get_current_user_id(),
    'album' => $_POST['album'],
	'image' => $url
));
}
}
function rearray(&$file_post) {
	 $file_ary = array();
		$file_count = count($file_post['name']);
		$file_keys = array_keys($file_post);

		for ($i=0; $i<$file_count; $i++) {
			foreach ($file_keys as $key) {
				$file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

if($token)
	$redirect = add_query_arg( 'addalbum', 'success', get_template_directory_uri().'/admin_gallery.php' );
else
	$redirect = add_query_arg( 'addalbum', 'failed', get_template_directory_uri().'/gallery_category.php' );
	
wp_redirect($redirect);
?>