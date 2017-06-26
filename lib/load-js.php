<?php

/* ======================================================================

    Load JS v3.0
    Load theme JavaScript file.
    Learn more: http://codex.wordpress.org/Function_Reference/wp_register_script

 * ====================================================================== */

function load_theme_js() {

    // Register and load js
	wp_register_script('modernizr-js', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', false, null, false);
	wp_enqueue_script('modernizr-js');

	wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	// wp_register_script('script-js', get_template_directory_uri() . '/assets/js/script.min.js', false, null, true);
	// wp_enqueue_script('script-js');

}
add_action('wp_enqueue_scripts', 'load_theme_js');

?>
