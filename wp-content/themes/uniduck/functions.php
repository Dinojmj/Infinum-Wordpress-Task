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