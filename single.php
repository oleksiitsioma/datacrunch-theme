<?php get_header(); ?>

<div class="container columnGrid">
    <div class="columnGrid__column columnGrid__column_8">
        <?php echo get_template_part( 'template-parts/post' , 'content' ); ?>
    </div>
    <div class="columnGrid__column columnGrid__column_4">
        <?php get_sidebar(); ?>
    </div>
</div>



<?php get_footer(); ?>