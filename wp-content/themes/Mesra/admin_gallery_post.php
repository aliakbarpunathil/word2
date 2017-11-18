<?php
require( '../../../wp-load.php' );
if ( ! function_exists( 'wp_handle_upload' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
}
global $wpdb;
//print_r($_FILES['files']);

$files  = rearray($_FILES['fileupload']);

foreach($files as $input_file){
if ($input_file['error'] === UPLOAD_ERR_OK) { 


$upload_overrides = array( 'test_form' => false );
$file=$input_file;
$movefile = wp_handle_upload( $file, $upload_overrides);
$url=$movefile['url'];
}
elseif ($input_file['error'] === UPLOAD_ERR_NO_FILE) { 

}
$token=$wpdb->insert('wp_gallery', array(
    'author' => get_current_user_id(),
    'image' => $url,
	'album' => $_POST['album_id']
));
}

echo $url;
die;
if($token)
	$redirect = add_query_arg( 'register', 'success', get_template_directory_uri().'/gallery-category.php' );
else
	$redirect = add_query_arg( 'register', 'fail', get_template_directory_uri().'/gallery-category.php');
wp_redirect( $redirect );

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
?>