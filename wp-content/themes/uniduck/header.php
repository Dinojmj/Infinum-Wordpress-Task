<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<title><?php 

	if (is_archive()) {
		echo get_the_archive_title();
	} elseif (is_single()) {
		echo get_the_title();
	} elseif (is_search()) {
		echo sprintf(__( 'Search Results for &#8220;%s&#8221;' ), 
		get_search_query());
	} else {
		echo get_bloginfo('description') . ' | ' . get_bloginfo('name');
	}

	?></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="" sizes="32x32">
	<link rel="icon" type="image/png" href="" sizes="16x16">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/main.css">

</head>

<body <?php body_class(); ?>>