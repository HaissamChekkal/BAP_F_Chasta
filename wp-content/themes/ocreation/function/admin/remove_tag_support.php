<?php

add_action( 'init', 'wpse48017_remove_tags' );
function wpse48017_remove_tags() {
    global $wp_taxonomies;
    $tax = 'post_tag'; // this may be wrong, I never remember the names on the defaults
    if( taxonomy_exists( $tax ) )
        unset( $wp_taxonomies[$tax] );
}