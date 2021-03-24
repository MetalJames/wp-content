<?php
// * Custom post types

// * always resave permalinks to make it work

function clw_init() {
    $labels = array(
        'name'                  => _x( 'Peripherals', 'Post type general name', 'clw' ),
        'singular_name'         => _x( 'Peripheral', 'Post type singular name', 'clw' ),
        'menu_name'             => _x( 'Peripherals', 'Admin Menu text', 'clw' ),
        'name_admin_bar'        => _x( 'Peripheral', 'Add New on Toolbar', 'clw' ),
        'add_new'               => __( 'Add New', 'clw' ),
        'add_new_item'          => __( 'Add New peripheral', 'clw' ),
        'new_item'              => __( 'New peripheral', 'clw' ),
        'edit_item'             => __( 'Edit peripheral', 'clw' ),
        'view_item'             => __( 'View peripheral', 'clw' ),
        'all_items'             => __( 'All peripherals', 'clw' ),
        'search_items'          => __( 'Search peripherals', 'clw' ),
        'parent_item_colon'     => __( 'Parent peripherals:', 'clw' ),
        'not_found'             => __( 'No peripherals found.', 'clw' ),
        'not_found_in_trash'    => __( 'No peripherals found in Trash.', 'clw' ),
        'featured_image'        => _x( 'Peripheral Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'clw' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'clw' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'clw' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'clw' ),
        'archives'              => _x( 'Peripheral archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'clw' ),
        'insert_into_item'      => _x( 'Insert into peripheral', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'clw' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this peripheral', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'clw' ),
        'filter_items_list'     => _x( 'Filter peripherals list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'clw' ),
        'items_list_navigation' => _x( 'Peripherals list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'clw' ),
        'items_list'            => _x( 'Peripherals list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'clw' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Peripheral custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'peripherals' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'excerpt', 'thumbnail', 'filter_items_list' ),
        // 'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'clw_peripheral', $args );
}
add_action( 'init', 'clw_init' );

?>