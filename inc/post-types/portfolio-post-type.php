<?php 

add_action( 'init', '___dc_register_portfolio_cpt' );

function ___dc_register_portfolio_cpt(){

	register_post_type( 'portfolio', [
		'label'         => 'Portfolio',
		'description'   => '',
		'public'        => true,
        'show_in_menu'  => true,
        'show_in_rest'  => true,
        'rest_base'     => null,
        'menu_position' => null,
		'menu_icon'     => null,
		'hierarchical'  => false,
		'supports'      => [ 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ],
        'taxonomies'    => [ 'skills' ],
		'has_archive'   => false,
		'rewrite'       => true,
		'query_var'     => true,
	] );

}