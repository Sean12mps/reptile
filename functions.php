<?php

// 	Helper Functions
include_once( get_template_directory() . '/framework/lib.php' );


// 	Theme main args and defaults
$theme_reptile = array(

	// 	Local Definitions for the themes
	'locales' 		=> array(
		'THEME_FRAMEWORKS' 	=> 	get_template_directory() . '/framework',
		'THEME_CSS' 		=> 	get_template_directory_uri() . '/_include/css',
		'THEME_JS' 			=> 	get_template_directory_uri() . '/_include/js',
	),


	// 	Support files for Reptile Class
	'includes'		=> apply_filters( 'reptile_supports', array(
		'reptile_template'	=>	get_template_directory() . '/framework/reptile/includes/class-reptile-template.php',
	) ),


);


//	Set Local Definitions
set_locales( $theme_reptile['locales'] );


// 	Load Up . . .
require_once( THEME_FRAMEWORKS . '/redux/redux-config.php' );
require_once( THEME_FRAMEWORKS . '/reptile/class-reptile.php' );


// 	Fire ! ! !
new Reptile( $theme_reptile );


/* @TODO : lets make a special place for these functions */

// 	remove weird css output in head
add_action( 'admin_bar_init', 'my_admin_bar_init' );

// 	Remove Redux Ads
add_action('init', 'removeAds');

// 	remove redux menu under the tools
add_action( 'admin_menu', 'remove_redux_menu',12 );

// 	load all required scripts
add_action( 'wp_enqueue_scripts', 'load_up' );
 



