<?php

//Custom shortcodes include
include('custom-shortcodes.php');

add_theme_support( 'post-thumbnails' ); // Theme support for post thumbnails
add_theme_support( 'custom-logo' );     // Theme support for custom logo
add_theme_support( 'menus' );           // Theme support for menus

// Remove autogenerated p tags
remove_filter ('the_content', 'wpautop');
remove_filter ('the_excerpt', 'wpautop');

//Image size for thumbnail photos
add_image_size('thumbnail_photo_1x', 360, 289, true);
add_image_size('thumbnail_photo_2x', 720, 578, true);

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
function uniduck_custom_logo_setup() {
	$defaults = array(
	'height'      => 44,
	'width'       => 344
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'uniduck_custom_logo_setup' );

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
if (function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Widget Area Footer',
        'before_widget' => '<div class = "widget-area">',
        'after_widget' => '</div>',
    )
);

// Social media customizer footer
add_action('customize_register', 'custom_social_media_options');

function custom_social_media_options($wp_customize) {

    $wp_customize->add_section('uniduck_social_media', array(
        'title'    => 'Social media (footer)',
        'description' => '',
        'priority' => 120,
    ));

    // Facebook options start
    $wp_customize->add_setting('uniduck_theme_options[fb_username]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control('uniduck_fb_username', array(
        'label'      => 'Facebook username',
        'section'    => 'uniduck_social_media',
        'settings'   => 'uniduck_theme_options[fb_username]',
    ));

    $wp_customize->add_setting('uniduck_theme_options[fb_link]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control('uniduck_fb_link', array(
        'label'      => 'Facebook link',
        'section'    => 'uniduck_social_media',
        'settings'   => 'uniduck_theme_options[fb_link]',
    ));
    // Facebook options end

    // Twitter options start
    $wp_customize->add_setting('uniduck_theme_options[tw_username]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control('uniduck_tw_username', array(
        'label'      => 'Twitter username',
        'section'    => 'uniduck_social_media',
        'settings'   => 'uniduck_theme_options[tw_username]',
    ));

    $wp_customize->add_setting('uniduck_theme_options[tw_link]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control('uniduck_tw_link', array(
        'label'      => 'Twitter link',
        'section'    => 'uniduck_social_media',
        'settings'   => 'uniduck_theme_options[tw_link]',
    ));
    // Twitter options end

    // Instagram options start
    $wp_customize->add_setting('uniduck_theme_options[ig_username]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control('uniduck_ig_username', array(
        'label'      => 'Instagram username',
        'section'    => 'uniduck_social_media',
        'settings'   => 'uniduck_theme_options[ig_username]',
    ));

    $wp_customize->add_setting('uniduck_theme_options[ig_link]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control('uniduck_ig_link', array(
        'label'      => 'Instagram link',
        'section'    => 'uniduck_social_media',
        'settings'   => 'uniduck_theme_options[ig_link]',
    ));
    // Instagram options end
}
