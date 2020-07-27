<!-- Featured post START -->
<section class="blog-post-featured">

	<?php
	if ( have_posts() ) : 
	$count = 0;
    while ( have_posts() ) : the_post();

    	if ($count == 0) {
    		?>

	<div class="img-container">

		<?php

			$post_id = get_the_ID();
			$featured_photo_1x_url = get_the_post_thumbnail_url($post_id, 'featured_photo_1x');
			$featured_photo_2x_url = get_the_post_thumbnail_url($post_id, 'featured_photo_2x');

			echo '<img class="image" src="' . $featured_photo_1x_url . '" srcset="' . $featured_photo_1x_url . ' 1x, ' . $featured_photo_2x_url . ' 2x" title="" alt="">';

		?>
	</div>

	<div class="container-blog-featured">
		<time class="blog-date"><?php the_time('F j, Y'); ?></time>
		<h2 class="blog-post-title">
			<a href="<?php echo post_permalink() ?>">
				<?php the_title(); ?>
			</a>
		</h2>

		<?php
			$tag_list = get_the_tag_list( '<ul class="blog-tags"><li>', '</li><li>', '</li></ul>' );

			if ( $tag_list && ! is_wp_error( $tag_list ) ) {
			    echo $tag_list;
			} ?>
		
		<p class="post-text"><?php echo get_the_excerpt(); ?><a class="read-more" href="<?php echo post_permalink() ?>">Read more</a></p>
		<ul class="post-info">
			<li>
				<a class="icon-favorits" href="#">17 faves</a>
			</li>
			<li>
				<a class="icon-comments" href="#"><?php echo get_comments_number(); ?> comments</a>
			</li>
		</ul>
	</div>
	<?php
	}
	$count ++;

	endwhile;
	else :
    	_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
	endif;
	?>

</section>
<!-- Featured post END -->