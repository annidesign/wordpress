<?php

// Our custom post type function
function create_blog_posttype() {
    register_post_type( 'Blogs',
        array(
            'labels' => array(
                'name' => __( 'Blogs' ),
                'singular_name' => __( 'Blog' )
            ),
            'public' => true,
            'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite'   => array( 'slug' => 'blogs'), 
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-gallery',
        'taxonomies' => array('tags', 'post_tag', 'category')
        )
    );
    
    register_post_type( 'FAQs',
        array(
            'labels' => array(
                'name' => __( 'FAQs' ),
                'singular_name' => __( 'FAQ' )
            ),
            'public' => true,
            'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite'   => array( 'slug' => 'faqs'), 
        'menu_position' => 6,
        'menu_icon' => 'dashicons-format-status',
        'taxonomies' => array('tags', 'post_tag', 'category')
        )
    );
}

add_action( 'init', 'create_blog_posttype' );

$post_type = get_post_type( $post->ID );
echo $post_type;

?>
