<?php 

// ADDING THEME SUPPORTS

add_theme_support( 'custom-logo', [
	'height'      => 80,
	'width'       => 250,
	'unlink-homepage-logo' => true
] );
add_theme_support( 'post-thumbnails' );


// CREATING CUSTOM MENU

add_action( 'after_setup_theme', '___dc_nav_menus' );

function ___dc_nav_menus() {
	register_nav_menu( 'header', 'Header Menu' );
}


// ENQUEING SCRIPTS

add_action( 'wp_enqueue_scripts', '___dc_theme_scripts' );

function ___dc_theme_scripts(){
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/dist/bundle.js');
}


// ENQUEING STYLES

add_action( 'wp_enqueue_scripts', '___dc_theme_styles' );

function ___dc_theme_styles(){
	wp_enqueue_style( 'bundle', get_template_directory_uri() . '/assets/dist/bundle.css' );
}


// INCLUDING CUSTOM POST TYPES

    // Portfolio
    require_once( get_template_directory() . '/inc/post-types/portfolio-post-type.php');

    
// INCLUDING CUSTOM TAXONOMIES

    // Skills
    require_once( get_template_directory() . '/inc/taxonomies/skills-taxonomy.php');


// REGISTERING SIDEBARS

add_action( 'widgets_init', '___dc_register_sidebars' );

function ___dc_register_sidebars(){

    register_sidebar( array(
        'id'            => "main-sidebar",
        'name'          => "Main Sidebar",
        'class'         => 'sidebar',
		'before_widget' => '<div class="sidebar__widget">',
		'after_widget'  => '</div>',
    ) );
}

// CUSTOM FUNCTION FOR DISPLAYING SITE NAME

function displaySiteName(){

    if( !is_front_page() ) {

        echo '<a class="header__logo_text" href="' . home_url() . '" title="' . get_bloginfo('name') . '">' . get_bloginfo('name') . '</a>';
        
    } else {
        echo '<p class="header__logo_text">' . get_bloginfo( 'name' ) . '</p>';
    }
}

function dispaySiteNameInTab(){

    if( !is_front_page() ) {

        return bloginfo('name');
        
    } else {

        return wp_title(' ') . ' | ' . bloginfo('name');
    }

    

}