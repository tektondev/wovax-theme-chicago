<?php
/**
 * Adds Front page template to Genisis child theme
 *
 * @author: Danial Bleile
 * @version: 0.0.1
 */
 
class Wovax_Chicago_Front_Page {
	
	protected $post;
	
	public function __construct(){
		
		global $post;
		
		$this->post = $post;
		
		add_action( 'genesis_before' , array( $this , 'the_video_feature' ) );
		
	} // end __construct
	
	
	public function the_video_feature(){
		
		$html = '<div id="video-feature">';
		
			$html .= '<div>';
			
				$html .= '<iframe src="https://player.vimeo.com/video/36900247?autoplay=true&loop=1&background=1" 
							frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
			
			$html .= '</div>';
		
		$html .= '</div>';
		
		echo $html ;
		
	} // end the_video_bg
	
	
} // end Wovax_Chicago_Front_Page

$wovax_front_page = new Wovax_Chicago_Front_Page();

genesis();



