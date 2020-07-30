<!-- Blog Posts START -->
<section class="blog-posts">
	<?php

    global $wp_query;

	if ( have_posts() ) :
	$count = 0;
    while ( have_posts() ) : the_post();

        get_template_part('template-parts/post-content');

	endwhile;

	else:
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
	endif;
	?>
</section>
<!-- Blog Posts END -->