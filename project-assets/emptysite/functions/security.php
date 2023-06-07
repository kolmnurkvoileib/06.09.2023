<?php
//WP SECURITY

function wpb_remove_version()
{
  return '';
}
add_filter('the_generator', 'wpb_remove_version');

function no_wordpress_errors(){
  return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

add_filter( 'rest_endpoints', function( $endpoints ){
  if ( isset( $endpoints['/wp/v2/users'] ) ) {
      unset( $endpoints['/wp/v2/users'] );
  }
  if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
      unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
  }
  return $endpoints;
});

if (!is_admin()) {
	// default URL format
	if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) die();
	add_filter('redirect_canonical', 'shapeSpace_check_enum', 10, 2);
}
function shapeSpace_check_enum($redirect, $request) {
	// permalink URL format
	if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) die();
	else return $redirect;
}


//REMOVE WELCOME PANEL

remove_action('welcome_panel', 'wp_welcome_panel');

//DISABLE XML-RPC

add_filter('xmlrpc_enabled', '__return_false');