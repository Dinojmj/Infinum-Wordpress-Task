<?php

//Custom shortcodes include
include('custom-shortcodes.php');

add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-logo' );

// Add menus in wp
add_theme_support( 'menus' );

remove_filter ('the_content', 'wpautop');
remove_filter ('the_excerpt', 'wpautop');

//Image size for thumbnail photos
add_image_size('thumbnail_photo_1x', 360, 289, true);
add_image_size('thumbnail_photo_2x', 720, 578, true);

//Image size for featured photos
add_image_size('featured_photo_1x', 555, 352, true);
add_image_size('featured_photo_2x', 1110, 704, true);

//Image size for cover photos
add_image_size('cover_photo_1x', 1441, 970, true);
add_image_size('cover_photo_2x', 2882, 1940, true);

//Image size for related photos
add_image_size('related_photo_1x', 252, 210, true);
add_image_size('related_photo_2x', 504, 420, true);

//Image size for logo
add_image_size('logo_image_1x', 172, 24, true);
add_image_size('logo_image_2x', 344, 48, true);

// Function to change the excerpt default 55 words to 32 words
function wpdocs_custom_excerpt_length( $length ) {
    return 32;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length' );

// Function to change excerpt default return of [...] to ...
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

// Recommended image logo size
function themename_custom_logo_setup() {
	$defaults = array(
	'height'      => 44,
	'width'       => 344
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

// Function for responsive youtube videos
add_filter('the_content', function($content) {
	return str_replace(array("<iframe", "</iframe>"), array('<div class="iframe-container"><iframe', "</iframe></div>"), $content);
});

add_filter('embed_oembed_html', function ($html, $url, $attr, $post_id) {
	if(strpos($html, 'youtube.com') !== false || strpos($html, 'youtu.be') !== false){
  		return '<div class="iframe-container-responsive iframe-container-responsive">' . $html . '</div>';
	} else {
	 return $html;
	}
}, 10, 4);

add_filter('embed_oembed_html', function($code) {
  return str_replace('<iframe', '<iframe class="iframe-container-responsive iframe" ', $code);
});

// Widget for footer text
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Widget Area Footer',
    'before_widget' => '<div class = "widget-area">',
    'after_widget' => '</div>',
  )
);

// Widget for social media footers
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Widget Area Footer Social',
    'before_widget' => '<div class = "widget-area-social">',
    'after_widget' => '</div>',
  )
);