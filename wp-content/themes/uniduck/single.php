<?php

get_template_part('header');

get_template_part('template-parts/header');

get_template_part('template-parts/blog-cover');

get_template_part('template-parts/blog-single');

get_template_part('template-parts/related-blog');

// Images for thumbnail
$thumbnail_1x_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail_photo_1x');
$thumbnail_2x_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail_photo_2x');

// Images for featured post
$featured_1x_url = get_the_post_thumbnail_url(get_the_ID(), 'featured_photo_1x');
$featured_2x_url = get_the_post_thumbnail_url(get_the_ID(), 'featured_photo_2x');

// Images for cover photo
$cover_1x_url = get_the_post_thumbnail_url(get_the_ID(), 'cover_photo_1x');
$cover_2x_url = get_the_post_thumbnail_url(get_the_ID(), 'cover_photo_2x');

get_template_part('template-parts/footer');

get_template_part('footer');