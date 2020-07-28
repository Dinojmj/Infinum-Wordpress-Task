<?php

// Custom shortcode for quotes 
// For quote to be left put [quote side="l"] content [/quote]
// for quote to be right put [quote side="r"] content [/quote]
function custom_quote( $atts, $content = null) {
	
	$class_arg = shortcode_atts( array(
		'side' => 'l'
	), $atts );

	return '<q class="quote-'. $class_arg['side'] .'">' . $content . '</q>';
}

add_shortcode('quote', 'custom_quote');