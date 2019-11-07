<?php

	function portfolio_files()
	{
		wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
		wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Manjari&display=swap');
		wp_enqueue_style( 'portfolio_main_style', get_stylesheet_uri(), null, microtime() );
	}

	add_action('wp_enqueue_scripts', 'portfolio_files', 1);

	function portfolio_features() {
		add_theme_support( 'post-thumbnails' );
	}

	add_action( 'after_setup_theme', 'portfolio_features' );

	function MainPagePostTypes() {
		register_post_type( 'WelcomeSection', array(
			'public' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'labels' => array(
				'name' => 'Welcome Section',
				'add_new_item' => 'Add your wecome text',
				'edit_item' => 'Edit welcome text',
			),
			'menu_icon' => 'dashicons-admin-home',
		) );
		register_post_type( 'StudioSection', array(
			'public' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'labels' => array(
				'name'=> 'Studio Section',
				'add_new_item' => 'Add short text about your studio',
				'edit_item' => 'Edit your studio section text',
			),
			'menu_icon' => 'dashicons-camera',
		) );
		register_post_type( 'ExpressYourself', array(
			'public' => true,
			'labels' => array(
				'name' => 'Express Yourself',
				'add_new_item' => 'Express yourself and your studio',
				'edit_item' => 'Edit expressing text',
			),
			'menu_icon' => 'dashicons-info',
		) );
		register_post_type( 'Services', array(
			'public' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'labels' => array(
				'name' => 'Your Services',
				'add_new_item' => 'Add service',
				'edit_item' => 'Edit service',
			),
			'menu_icon' => 'dashicons-images-alt2',
		) );
		register_post_type( 'Feedbacks', array(
			'public' => true,
			'labels' => array(
				'name' => 'Feedbacks',
				'add_new_item' => 'Add feedback',
				'edit_item' => 'Edit feedback',
			),
			'menu_icon' => 'dashicons-format-chat',
		) );
		register_post_type( 'ExpressPortfolio', array(
			'public' => true,
			'labels' => array(
				'name' => 'Expressing Portfolio',
				'add_new_item' => 'Express your portfolio',
				'edit_item' => 'Edit expressing',
			),
			'menu_icon' => 'dashicons-art',
		) );
	}

	add_action( 'init', 'MainPagePostTypes' );

	add_filter('excerpt_more', function($more) {
		return '...';
	});
?>