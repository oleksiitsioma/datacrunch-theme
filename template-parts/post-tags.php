<?php 

$skills = get_the_terms( $post->ID , 'skills' );


if( $skills ) { ?>

    <div class="postTags">

        <?php foreach ($skills as $skill) { ?>

            <a
                target="_blank"
                class="postTags__item"
                href="<?php echo get_term_link( $skill->term_id, $taxonomy = $skill->taxonomy );?>"
            >
                <?php echo $skill->name; ?>
            </a>

        <?php } ?>

    </div>

<?php } ?>