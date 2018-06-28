<?php


function load_css() {
	wp_enqueue_style( 'sixtysecondtheme_stylesheet', get_stylesheet_uri() );
	wp_enqueue_style( 'sixtysecondtheme_gfonts', 'https://fonts.googleapis.com/css?family=Open+Sans:800,700,300' );
}

add_action( 'wp_enqueue_scripts', 'load_css' );

include_once('acf-options-page/acf-options-page.php');

function my_acf_options_page_settings( $settings )
{
	$settings['title'] = 'Edit Website';

	return $settings;
}

add_filter('acf/options_page/settings', 'my_acf_options_page_settings');
if( function_exists('acf_add_options_sub_page') ) {

	acf_add_options_sub_page('About');
	acf_add_options_sub_page('Gallery');
	acf_add_options_sub_page('New & Old');
	acf_add_options_sub_page('Facts');
	acf_add_options_sub_page('Twitter');
	acf_add_options_sub_page('Icon');
	acf_add_options_sub_page('Contact');
	acf_add_options_sub_page('Media');
	acf_add_options_sub_page('Budweiser – History');
	acf_add_options_sub_page('Budweiser – Media');

}


?>
