<?php
function bingle_post_types()
{
    //Testimonials
    register_post_type('testimonial', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'testimonials'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Testimonial',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'all_items' => 'All Testimonial',
            'singular_name' => 'Testimonial'
        ),
        'menu_icon' => 'dashicons-list-view'
    ));
    //Study
    register_post_type('study', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'studyes'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Study',
            'add_new_item' => 'Add New Study',
            'edit_item' => 'Edit Study',
            'all_items' => 'All Study',
            'singular_name' => 'Study'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));
}

add_action('init', 'bingle_post_types');