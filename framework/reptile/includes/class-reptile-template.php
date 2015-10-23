<?php 

class Reptile_Template {


	public $name;


	public function __construct ( $args = null ) {


		$this->name = $args;


	}


	public static function run ( $args = null ) {


		Reptile_Template::print_header();


		Reptile_Template::print_content();


		Reptile_Template::print_sidebar();


		Reptile_Template::print_footer();


	}


	public static function print_header ( $args = null ) {


		/*	Head Filters
			- reptile_header_class
		*/
		$header_class = apply_filters( 'reptile_header_class', 'reptile-header' );


		/*	Header Hooks
			- get_header
				- reptile_meta
			- reptile_header
		*/
		get_header();


		echo '<header id="container-header" class="'. $header_class .'">';


			do_action( 'reptile_header' );


		echo '</header>';


	}


	public static function print_content ( $args = null ) {

		
		/*	Content Filters
			- reptile_container_class
			- reptile_content_class
		*/
		$container_class 	= apply_filters( 'reptile_container_class', 'reptile-container' );
		$content_class 		= apply_filters( 'reptile_content_class', 'reptile-content' );


		/*	Content Hooks
			- reptile_container_main/prepend
			- reptile_container_main/append
			- reptile_content/prepend
			- reptile_content/append
		*/
		echo '<div id="container-main" class="'. $container_class .'">';


			do_action( 'reptile_container_main/prepend' );


			echo '<div id="content" class="'. $content_class .'">';


				do_action( 'reptile_content/prepend' );


				get_template_part( 'loop', 'single' );


				do_action( 'reptile_content/append' );


			echo '</div><!-- #content -->';


			do_action( 'reptile_container_main/append' );


        echo '</div><!-- #container-main -->';


	}


	public static function print_sidebar ( $args = null ) {


		/*	Sidebar Filters
			- reptile_container_sidebar
		*/
		$container_class = apply_filters( 'reptile_container_sidebar', 'reptile-container' );


		/*	Sidebar Hooks
			- reptile_container_sidebar/prepend
			- reptile_container_sidebar/append
		*/
		echo '<div id="container-sidebar" class="'. $container_class .'">';


			do_action( 'reptile_container_sidebar/prepend' );


        	get_sidebar();


			do_action( 'reptile_container_sidebar/append' );


        echo '</div><!-- #container-sidebar -->';


	}


	public static function print_footer ( $args = null ) {


		/*	Footer Filters
			- reptile_container_sidebar
		*/
		$container_class = apply_filters( 'reptile_container_footer', 'reptile-container' );


		/*	Footer Hooks
			- reptile_container_footer/prepend
			- reptile_container_footer/append
			- reptile_footer
		*/
		echo '<footer id="container-footer" class="'. $container_class .'">';


			do_action( 'reptile_container_footer/prepend' );


			do_action( 'reptile_footer' );


			get_footer();


			do_action( 'reptile_container_footer/append' );


		echo '</footer>';


	}


}


function Reptile ( $args = null ) {


	Reptile_Template::run( $args );


}