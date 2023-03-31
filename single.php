<?php get_header(); ?>

<div class="container columnGrid">
    <div class="columnGrid__column columnGrid__column_8">
        <h1 class="h1"><?php the_title(); ?></h1>
        <?php echo get_template_part( 'template-parts/post' , 'content' ); ?>
    </div>
    <div class="columnGrid__column columnGrid__column_4">
        <?php get_sidebar(); ?>
    </div>
</div>



<?php get_footer(); ?>