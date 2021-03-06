<?php
if (have_posts() ):
	while ( have_posts() ): the_post();
?>
<!-- Blog cover START -->
<section class="blog-cover">
	<div class="container-cover">
		<h1 class="title-cover"><?php the_title();  ?></h1>
		<p><?php the_author(); ?></p>
		<a href="<?php echo get_home_url(); ?>">Back to blog</a>
	</div>
	<?php
		$post_id = get_the_ID();
		$cover_1x_url = get_the_post_thumbnail_url($post_id, 'cover_photo_1x');
		$cover_2x_url = get_the_post_thumbnail_url($post_id, 'cover_photo_1x');

		$image_id = get_post_thumbnail_id();
		$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
		$image_title = get_the_title($image_id);

		echo '<img class="image-cover" src="' . $cover_1x_url . '" srcset="' . $cover_1x_url . ' 1x, ' . $cover_2x_url . ' 2x" title="' . $image_title . '" alt="' . $image_alt . '">';
	?>
</section>
<!-- Blog cover END -->
<?php
endwhile;
else:
	_e( 'Sorry, no pages matched your criteria.', 'textdomain' );
endif;
?>