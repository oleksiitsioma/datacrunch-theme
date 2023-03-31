<a class="postsLoopItem" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <h2 class="h2 postsLoopItem__title"><?php the_title(); ?></h2>
    <img src="<?php echo get_the_post_thumbnail_url( $post->ID , 'large' )?>" alt="<?php the_title(); ?>">
</a>