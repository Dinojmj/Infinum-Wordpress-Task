<!-- Related Blog START -->

<?php
	$previous_post = get_previous_post();
	if ($previous_post) {
?>

<section class="related-post">
	<h2 class="related-title">More Magic</h2>

	<div>
		<?php

		$related_photo_1x_url = get_the_post_thumbnail_url($previous_post->ID, 'related_photo_1x');
		$related_photo_2x_url = get_the_post_thumbnail_url($previous_post->ID, 'related_photo_2x');

		echo '<img class="image" src="' . $related_photo_1x_url . '" srcset="' . $related_photo_1x_url . ' 1x, ' . $related_photo_2x_url . ' 2x" title="" alt="">';

		?>

		<div class="container-related">
			<h3 class="blog-title">
				<?php echo $previous_post->post_title; ?>
			</h3>
			<p>
				<?php

				$post_excerpt = get_the_excerpt($previous_post->ID);
				if ($post_excerpt) {
					echo $post_excerpt;
				}

				?>

			</p>
			<a class="read-more" href="<?php echo get_permalink($previous_post->ID); ?>">Read more</a>
		</div>
	</div>
</section>
<!-- Related Blog END -->
<?php } ?>