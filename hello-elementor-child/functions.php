<?php
function hello_child_enqueue_styles() {
    wp_enqueue_style(
        'hello-elementor-style',
        get_template_directory_uri() . './style.css'
    );
}
add_action( 'wp_enqueue_scripts', 'hello_child_enqueue_styles');