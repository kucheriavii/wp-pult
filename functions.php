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

	//configure admin-menu. Видаляємо зайві пункти меню
	function menu_styling(){
		global $menu;
		$restricted = array(
			__('Tools'),
			__('Media'),
			__('Comments'),
			__('Links'),
			__('Posts')
			);
		end ($menu);
		while(prev($menu)){
			$value = explode(' ', $menu[key($menu)][0]);
			//print_r($menu[key($menu)]);
			if(in_array($value[0] !=NULL ? $value[0]:"", $restricted)){
				unset($menu[key($menu)]);
			}	
		}
	}

	add_action('admin_menu', 'menu_styling');
	//Кінець функції

	//Добавляємо кнопку "Пульт" на яку вішаємо функцію add_my_setting()
	add_action('admin_menu', function(){
		add_menu_page( 'Дополнительные настройки сайта', 'Пульт', 'manage_options', 'site-options', 'add_my_setting', '', 4 ); 
	});
	//Функція - дивитися pult.php
	function add_my_setting(){
		require_once("pult.php");
	}

?>