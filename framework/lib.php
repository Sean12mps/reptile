<?php 

if ( ! function_exists( 'set_locales' ) ) {


	/* 	
		@param : args ( array )
		- name => value
		
		@examp :
		$args = {
			'some_name_1' 	=> 	'some_value_1',
			'some_name_2' 	=> 	'some_value_2',
		};
	 */
	function set_locales ( $args ) {


		foreach ( $args as $key => $value ) {


			if ( ! defined( $key ) ) {


				define( $key, $value );


			}


		}


	}


}


if ( ! function_exists( 'my_admin_bar_init' ) ) {

	function my_admin_bar_init () {

		remove_action( 'wp_head', '_admin_bar_bump_cb' );

	}

}



if ( ! function_exists( 'removeAds' ) ) {

	function removeAds () {

	    if ( class_exists( 'ReduxFrameworkPlugin' ) ) {

	        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks' ), null, 2 );

	    }

	    if ( class_exists( 'ReduxFrameworkPlugin' ) ) {

	        remove_action( 'admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    

	    }

	}

}



if ( ! function_exists( 'remove_redux_menu' ) ) {

	function remove_redux_menu () {

	    remove_submenu_page( 'tools.php', 'redux-about' );

	}

}


if ( ! function_exists( 'load_up' ) ) {

	function load_up () {

		// css
		wp_enqueue_style( 'reptile-main', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'bootstrap-grid', THEME_CSS . '/bootstrap.min.css' );

		// js
		wp_enqueue_script( 'jquery' );
		// wp_enqueue_script('jquery', "http" . ( $_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", false, null);

	}

}