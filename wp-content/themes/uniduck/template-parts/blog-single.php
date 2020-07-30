<!-- Blog START -->
<section class="blog-single">
	<?php
	if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>
	<div class="blog-container">
		<?php the_content(); ?>

		<?php
		$tag_list = get_the_tag_list( '<ul class="blog-tags"><li>', '</li><li>', '</li></ul>' );

		if ( $tag_list && ! is_wp_error( $tag_list ) ) {
		    echo $tag_list;
		} ?>
	</div>

	<?php
	endwhile;
	else :
    	_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
	endif;
	?>
</section>
<!-- Blog END -->