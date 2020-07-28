<div class="blog-container">

    <div class="img-container">

        <?php

            $post_id = get_the_ID();
            $thumbnail_1x_url = get_the_post_thumbnail_url($post_id, 'thumbnail_photo_1x');
            $thumbnail_2x_url = get_the_post_thumbnail_url($post_id, 'thumbnail_photo_2x');

            echo '<img class="image" src="' . $thumbnail_1x_url . '" srcset="' . $thumbnail_1x_url . ' 1x, ' . $thumbnail_2x_url . ' 2x" title="" alt="">';

        ?>

    </div>

    <div class="container-blogs">

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
                <span class="icon-favorits">17 faves</span>
            </li>
            <li>
                <span class="icon-comments"><?php echo get_comments_number(); ?> comments</span>
            </li>
        </ul>

    </div>

</div>