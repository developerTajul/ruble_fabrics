<?php 


/**
*
* @Theme All css, js and conditional js files
*
*
*/

add_action('wp_enqueue_scripts', 'comet_theme_all_files');

function comet_theme_all_files(){

	/**
	*
	* all css files
	*/
	wp_enqueue_style('comet-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.1', 'all');
	wp_enqueue_style('comet-font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.0.2', 'all');
	wp_enqueue_style('comet-icofont', get_template_directory_uri().'/assets/css/icofont.css', array(), '1.0.3', 'all');
	wp_enqueue_style('comet-animate', get_template_directory_uri().'/assets/css/animate.css', array(), '1.0.4', 'all');
	wp_enqueue_style('comet-owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1.0.5', 'all');
	wp_enqueue_style('comet-owl-theme-default', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), '1.0.6', 'all');
	wp_enqueue_style('comet-magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0.7', 'all');
	wp_enqueue_style('comet-main', get_template_directory_uri().'/assets/css/main.css', array(), '1.0.8', 'all');
	wp_enqueue_style('comet-responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.9', 'all');

	wp_enqueue_style( 'woostarter-style', get_stylesheet_uri() );


	wp_enqueue_style('comet-fonts', get_comet_fonts() );

	


	/**
	* all js files
	*
	*/

	wp_enqueue_script('comet-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '3.0.1', true);
	wp_enqueue_script('comet-waves', get_template_directory_uri().'/assets/js/waves.js', array('jquery'), '3.0.2', true);
	wp_enqueue_script('comet-owlcarousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '3.0.3', true);
	wp_enqueue_script('comet-counterup', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'), '3.0.4', true);
	wp_enqueue_script('comet-scrollUp', get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js', array('jquery'), '3.0.5', true);
	wp_enqueue_script('comet-waypoints', get_template_directory_uri().'/assets/js/waypoints.min.js', array('jquery'), '3.0.6', true);
	wp_enqueue_script('comet-magnific-popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), '3.0.7', true);


	wp_enqueue_script('comet-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ', array('jquery'), '3.0.8', true);

	wp_enqueue_script('comet-map', get_template_directory_uri().'/assets/js/map.js', array('jquery'), '3.0.9', true);
	wp_enqueue_script('comet-elevateZoom', get_template_directory_uri().'/assets/js/jquery.elevateZoom-3.0.8.min.js', array('jquery'), '4.0.0', true);
	wp_enqueue_script('comet-main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '4.0.1', true);

	
	/**
	*
	* conditional js files
	*
	*/
	wp_enqueue_script('comet-html5shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_script_add_data('comet-html5shim', 'conditional', 'lt IE 9');


	wp_enqueue_script('comet-respond', 'https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js');
	wp_script_add_data('comet-respond', 'conditional', 'lt IE 9');




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}


/**
*
* adding fonts
*
*/
function get_comet_fonts(){
	$fonts = array();
	$fonts[] = 'Roboto:100,300,400,500,700';
	$fonts[] = 'Roboto+Slab:100,300,400,700';
	$fonts[] = 'Halant:300,400';
	$comet_fonts = add_query_arg( array(
		'family'	=> urlencode(implode('|', $fonts))
		// 'family'	=> implode('|', $fonts)
	), 'https://fonts.googleapis.com/css');
	return $comet_fonts;
}



/**
*
* admin inline js
* for post format	
*
*/
add_action('admin_print_scripts', 'comet_inline_js', 1000);

function comet_inline_js(){

	if( get_post_type() === 'post'): ?>
		<script type="text/javascript">
			jQuery(document).ready(function(){


				$id = jQuery('input[name="post_format"]:checked').attr('id');

				// video
				if( $id == 'post-format-video'){
					jQuery('.cmb2-id-video-link').show();
				}else{
					jQuery('.cmb2-id-video-link').hide();
				}

				// audio
				if( $id == 'post-format-audio'){
					jQuery('.cmb2-id-audio-link').show();
					
				}else{
					jQuery('.cmb2-id-audio-link').hide();
				}

				// gallery
				if( $id == 'post-format-gallery'){
					jQuery('.cmb2-id-gallery-images').show();
					
				}else{
					jQuery('.cmb2-id-gallery-images').hide();
				}


				// quote
				if( $id == 'post-format-quote'){
					jQuery('.cmb2-id-quote-text').show();
					
				}else{
					jQuery('.cmb2-id-quote-text').hide();
				}


				/**
				*
				* 2nd step
				*
				*/
				jQuery('input[name="post_format"]').change(function(){

					

					$id = jQuery('input[name="post_format"]:checked').attr('id');

					// video
					if( $id == 'post-format-video'){
						jQuery('.cmb2-id-video-link').show();
					}else{
						jQuery('.cmb2-id-video-link').hide();
					}

					// audio
					if( $id == 'post-format-audio'){
						jQuery('.cmb2-id-audio-link').show();
						
					}else{
						jQuery('.cmb2-id-audio-link').hide();
					}

					// gallery
					if( $id == 'post-format-gallery'){
						jQuery('.cmb2-id-gallery-images').show();
						
					}else{
						jQuery('.cmb2-id-gallery-images').hide();
					}

					// quote
					if( $id == 'post-format-quote'){
						jQuery('.cmb2-id-quote-text').show();
						
					}else{
						jQuery('.cmb2-id-quote-text').hide();
					}


				});


			});	
		</script>

	<?php endif; 
 
}
