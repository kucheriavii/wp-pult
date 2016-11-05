<?php 
//полное отключение Emoji start
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
//полное отключение Emoji end

//remove sidebar
	show_admin_bar( false );
//
	remove_action( 'wp_head', 'wlwmanifest_link');
	remove_action( 'wp_head', 'wp_generator');
 ?>