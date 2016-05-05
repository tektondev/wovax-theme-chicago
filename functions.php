<?php
/** 
 * @author: Danial Bleile
 * @version: 0.0.1
 */
class Wovax_Chicago_Theme {
	
	
	public function __construct(){
		
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		
		add_action( 'wp_enqueue_scripts' , array( $this , 'the_public_scripts' ), 1 );
		
	} // end __construct
	
	
	public function the_public_scripts(){
		
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		
	} // end the_public_scripts
	
	
} // end Wovax_Chicago_Theme

$wovax_chicago = new Wovax_Chicago_Theme();