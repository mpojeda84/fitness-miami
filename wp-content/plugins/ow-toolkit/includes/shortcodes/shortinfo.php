<?php 
function ulysses_info( $atts )
    extract(shortcode_atts(array(
	if( '' === $section_id ) :
		$section_id = __('shortinfo','ulysses');
	endif;
	// START INFO SECTION 