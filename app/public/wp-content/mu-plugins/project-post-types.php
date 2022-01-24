<?php 

function project_post_types() {

   //Staff Post Type
   register_post_type('staff', array(
    'public' => true,
    'show_in_rest' => true,
    'rewrite' => array('slug' => 'departments'),
    'has_archive' => 'true',
    'supports' => array('title', 'editor', 'thumbnail'),
    'labels' => array(
        'name' => 'Staff',
        'add_new_item' => 'Add New Staff',
        'edit_item' => 'Edit Staff',
        'all_items' => 'All Staff',
        'singular_name' => 'Staff'
    ),
    'menu_icon' => 'dashicons-groups',
        ));
}
add_action('init', 'project_post_types');
