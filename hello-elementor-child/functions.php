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

// Dequeue Elementor CSS on pages using our custom templates.
// Elementor global styles conflict with our white-on-dark-background colours.
// Add new templates to the if condition as pages are updated, after the blue closing bracket add: || is_page_template  etc
function hello_child_dequeue_elementor() {
    if ( is_page_template( 'complaint-process.php' ) ) {
        wp_dequeue_style( 'elementor-frontend' );
        wp_dequeue_style( 'elementor-global-css' );
        wp_dequeue_style( 'e-animations' );
    }
}
add_action( 'wp_enqueue_scripts', 'hello_child_dequeue_elementor', 20 ); // The 20 here is the run order priority, default is 10, so this runs after the enqueue function to remove the Elementor styles