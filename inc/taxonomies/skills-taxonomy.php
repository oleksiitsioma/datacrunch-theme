<?php

add_action( 'init', '___dc_register_skills_tax' );

function ___dc_register_skills_tax(){
    
    register_taxonomy( 'skills', [ 'portfolio' ], [
		'label'             => 'Skills',
		'description'       => '',
        'public'            => true,
		'hierarchical'      => true,
		'rewrite'           => true,
        'capabilities'      => array(),
		'meta_box_cb'       => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
    ] );
}