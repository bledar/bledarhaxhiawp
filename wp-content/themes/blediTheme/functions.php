<?php

function blediThemeResurse(){

		$linkStyle=get_stylesheet_uri();
		
		wp_enqueue_style('style',$linkStyle);
}
	
add_action( 'wp_enqueue_scripts', 'blediThemeResurse' );	

register_nav_menus(array('primary' => __('Primary Menu') ))	;


function my_scripts_method() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'gallery', get_template_directory_uri() . '/js/script.js' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

?>