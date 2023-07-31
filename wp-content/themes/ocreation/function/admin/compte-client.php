<?php

// Add role client
$capabilities = [
    'update_core' => true,
    'update_plugins' => true,
    'delete_others_pages' => true,
    'delete_others_posts'=> true,
    'delete_pages'=> true,
    'delete_posts'=> true,
    'delete_private_pages'=> true,
    'delete_private_posts'=> true,
    'delete_published_pages'=> true,
    'delete_published_posts'=> true,
    'edit_others_pages'=> true,
    'edit_others_posts'=> true,
    'edit_pages'=> true,
    'edit_posts'=> true,
    'edit_private_pages'=> true,
    'edit_private_posts'=> true,
    'edit_published_pages'=> true,
    'edit_published_posts'=> true,
    'manage_categories'=> true,
    'publish_pages'=> true,
    'publish_posts'=> true,
    'read_private_pages'=> true,
    'read_private_posts'=> true,
    'read'=> true,
    'upload_files'=> true,
    'is_client' => true,
];

//remove_role('client');

add_role('client','Client', $capabilities);

if(current_user_can('is_client')){


    add_action( 'admin_init', 'mf_remove_menu_pages' );
    function mf_remove_menu_pages() {
        remove_menu_page( 'tools.php' );
        remove_menu_page( 'edit-comments.php' );
    };

}
