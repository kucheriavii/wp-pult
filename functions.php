<?php 
//полное отключение Emoji start
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
//полное отключение Emoji end

//remove sidebar
	show_admin_bar( false );
//remove generator & manifest
	remove_action( 'wp_head', 'wlwmanifest_link');
	remove_action( 'wp_head', 'wp_generator');
//creating a widget area
	function logo_widget_svg() {

		register_sidebar( array(
			'name'          => 'Name logo',
			'id'            => 'Id logo',
			'before_widget' => '<div class="before_widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="hidden">',
			'after_title'   => '</h2>',
		) );

	}
	add_action( 'widgets_init', 'logo_widget_svg' );

	require_once (get_stylesheet_directory()."./theme-options.php");
	add_theme_support( 'post-thumbnails' ); 
 ?>