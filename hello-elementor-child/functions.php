<?php
function hello_child_enqueue_styles() {

    // 1. Always load the parent theme CSS
    wp_enqueue_style(
        'hello-elementor-style',
        get_template_directory_uri() . '/style.css'
    );

    // 2. Always load our sitewide child theme CSS
    wp_enqueue_style(
        'hello-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('hello-elementor-style')
    );

    // 3. Auto-load a page-specific CSS file if one exists
    if ( is_page() ) {
        $slug = get_post_field( 'post_name', get_the_ID() );
        $css_file_path = get_stylesheet_directory() . '/css/' . $slug . '.css';
        $css_file_url  = get_stylesheet_directory_uri() . '/css/' . $slug . '.css';

        if ( file_exists( $css_file_path ) ) {
            wp_enqueue_style(
                'hello-child-page-' . $slug,
                $css_file_url,
                array('hello-child-style')
            );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'hello_child_enqueue_styles' );