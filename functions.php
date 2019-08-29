<?php

	function portfolio_files()
	{
		wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
		wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Manjari&display=swap');
		wp_enqueue_style( 'portfolio_main_style', get_stylesheet_uri(), null, microtime() );
	}

	add_action('wp_enqueue_scripts', 'portfolio_files', 1);

?>