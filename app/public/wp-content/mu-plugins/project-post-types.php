<?php 

function project_post_types() {
    //Department Post Type
    register_post_type('department', array(
'public' => true,
'show_in_rest' => true,
'supports' => array('title', 'editor'),
'rewrite' => array('slug' => 'departments'),
'has_archive' => 'true',
'labels' => array(
    'name' => 'Departments',
    'add_new_item' => 'Add New Department',
    'edit_item' => 'Edit Department',
    'all_items' => 'All Departments',
    'singular_name' => 'Department'
),
'menu_icon' => 'dashicons-buddicons-groups',
    ));

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
