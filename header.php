<?php get_header('head'); ?>

<header class="header">
    <div class="container header__container columnGrid">
        <div class="columnGrid__column columnGrid__column_6">

            <?php
            if ( has_custom_logo() ) {
                echo get_custom_logo();
            } else {
                displaySiteName();
            } ?>

        </div>
        <div class="columnGrid__column columnGrid__column_6">
            <?php wp_nav_menu( [
                'theme_location'    => 'header',
                'container'         => false,
                'menu_class'        => 'header__menu'
            ] ); ?>
        </div>
    </div>
</header>