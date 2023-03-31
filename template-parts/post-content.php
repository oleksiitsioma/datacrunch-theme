<?php 

if( 'portfolio' === get_post_type() ){

    echo get_template_part( 'template-parts/post' , 'tags' );    

}






?>


<div class="postContent">
    <?php the_content(); ?>
</div>