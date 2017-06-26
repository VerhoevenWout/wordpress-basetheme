<?php

	require_once ('lib/load-jquery.php');
	require_once ('lib/load-js.php');
	require_once ('lib/remove-header-junk.php');
  // require_once ('ies/html5reset.php');
  require_once ('lib/general.php');
  require_once ('lib/no-self-pings.php');
  require_once ('lib/remove-trackbacks-from-comments.php');
	require_once ('lib/custom_posts.php');

	//Adding Google Web Fonts
	function load_fonts() {
	  wp_register_style('verhoevenwout_fonts', 'https://fonts.googleapis.com/css?family=Titillium+Web:300,300i,400');
	  wp_enqueue_style( 'verhoevenwout_fonts');
	}
	add_action('wp_print_styles', 'load_fonts');

	// Adding Bootstrap functionality
	function bootstrap_script() {
	  wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ), '', true );
	  wp_register_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css');
	  wp_enqueue_style( 'bootstrap-style' );
		wp_register_style( 'custom-style', get_template_directory_uri() . '/style.css');
		wp_enqueue_style( 'custom-style' );
		wp_register_script( 'script-jquery', get_template_directory_uri() . '/assets/js/jquery-1.9.1.min.js', '', true  );
		wp_enqueue_script( 'script-jquery' );

		wp_register_script( 'script-slick', get_template_directory_uri() . '/assets/js/slick.js', '', true  );
		wp_enqueue_script( 'script-slick' );

		wp_register_script( 'script-custom', get_template_directory_uri() . '/assets/js/script.js', '', true  );
		wp_enqueue_script( 'script-custom' );
	}
	add_action( 'wp_enqueue_scripts', 'bootstrap_script' );

	// update_option('siteurl','http://verhoevenwout.be/tests/portfolioWP');
	// update_option('home','http://verhoevenwout.be/tests/portfolioWP');
