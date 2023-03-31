<?php get_header(); ?>

<div class="container columnGrid">
    <div class="columnGrid__column columnGrid__column_8 postsLoop">
        <?php
        
            if( have_posts() ) : while( have_posts() ) : the_post();
                echo get_template_part( 'template-parts/post', 'loop');
            endwhile; endif; 

        ?>
    </div>
    <div class="columnGrid__column columnGrid__column_4">
        <?php get_sidebar(); ?>
    </div>
</div>



<?php get_footer(); ?>