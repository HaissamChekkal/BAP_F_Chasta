<?php
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Réseaux sociaux',
        'menu_title'	=> 'Réseaux sociaux',
        'menu_slug' 	=> 'reseaux-sociaux',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
}