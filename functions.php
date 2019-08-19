<?php

	function portfolio_files()
	{
		wp_enqueue_style( 'portfolio_main_style', get_stylesheet_uri());
	}

	add_action('wp_enqueue_script', 'portfolio_files');

?>