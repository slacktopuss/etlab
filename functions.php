<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'modal', get_template_directory_uri() . '/assets/css/mdl.css' );
	wp_enqueue_style( 'etlab', get_template_directory_uri() . '/assets/css/etlab.css' );
	wp_enqueue_style( 'bundle', get_template_directory_uri() . '/assets/css/bundle.css' );
	

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//code.jquery.com/jquery-3.6.1.min.js');
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'jquery-bundle', get_template_directory_uri() . '/assets/js/jquery.bundle.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'ymaps', 'https://api-maps.yandex.ru/2.1/?apikey=cdea7104-9912-4c31-a9c5-928c2e1085fe&lang=ru_RU', array('jquery'), 'null', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'charts', get_template_directory_uri() . '/assets/js/charts.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'placemark', get_template_directory_uri() . '/assets/js/placemark.js', array('ymaps'), 'null', true );

});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>