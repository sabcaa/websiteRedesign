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

    // Load Google Fonts
    wp_enqueue_style(
        'hello-child-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Noto+Sans:wght@400;500;600&display=swap',
        array(),
        null
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

    // Load front page CSS
    if ( is_front_page() ) {
        wp_enqueue_style(
            'hello-child-page-home',
            get_stylesheet_directory_uri() . '/css/home.css',
            array('hello-child-style')
        );
    }

    // 4. Header CSS and JS
    wp_enqueue_style(
        'hello-child-header',
        get_stylesheet_directory_uri() . '/css/header.css',
        array('hello-child-style')
    );
    wp_enqueue_script(
        'hello-child-header',
        get_stylesheet_directory_uri() . '/js/header.js',
        array(),
        null,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'hello_child_enqueue_styles' );

// Dequeue Elementor CSS on pages using our custom templates.
// Elementor global styles conflict with our white-on-dark-background colours.
// Add new templates to the if condition as pages are updated, after the blue closing bracket ) add: || is_page_template  etc
function hello_child_dequeue_elementor() {
    if ( is_page_template( 'complaint-process.php' ) || is_page_template( 'applications.php' ) || is_page_template( 'upcoming-hearings.php' ) || is_page_template('professional-liability-insurance.php') || is_page_template('practice-hours.php')  || is_page_template('corporate-plans-reports.php') || is_page_template( 'member-portal-support.php' ) || is_page_template('first-aid-cpr.php')  ||  is_page_template('registration-renewal-fees.php') || is_page_template('approved-acupuncture-education-programs.php') || is_page_template('continuing-competence-program.php') || is_page_template('governance-documents.php')  || is_page_template('about-the-college.php') || is_page_template('renewal.php') || is_page_template('simple-page.php')|| is_single() || is_archive() ) {
        wp_dequeue_style( 'elementor-frontend' );
        wp_dequeue_style( 'elementor-global-css' );
        wp_dequeue_style( 'e-animations' );
    }
    
}
add_action( 'wp_enqueue_scripts', 'hello_child_dequeue_elementor', 20 ); // The 20 here is the run order priority, default is 10, so this runs after the enqueue function to remove the Elementor styles

function hello_child_dequeue_parent_extras() {
    wp_dequeue_style( 'hello-elementor' );
    wp_dequeue_style( 'hello-elementor-theme-style' );
    wp_dequeue_style( 'hello-elementor-header-footer' );
}
add_action( 'wp_enqueue_scripts', 'hello_child_dequeue_parent_extras', 20 );

// Font Awesome v5 and 6
function hello_child_upgrade_font_awesome() {
    wp_dequeue_style( 'font-awesome' );
    
    // FA5 (what Elementor loads on live)
    wp_enqueue_style(
        'font-awesome-5',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css',
        array(),
        '5.15.3'
    );
    
    // FA6
    wp_enqueue_style(
        'font-awesome-6',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        array(),
        '6.5.0'
    );
}
add_action( 'wp_enqueue_scripts', 'hello_child_upgrade_font_awesome', 20 );


// Load post and archive styles
function hello_child_enqueue_post_styles() {
    if ( is_single() || is_archive() || is_home() ) {
        wp_enqueue_style(
            'hello-child-post-styles',
            get_stylesheet_directory_uri() . '/css/single.css',
            array('hello-child-style')
        );
    }
}
add_action( 'wp_enqueue_scripts', 'hello_child_enqueue_post_styles' );


// Register Secure Custom Fields plugin Options Page for sitewide settings
if ( function_exists( 'scf_add_options_page' ) ) {
    scf_add_options_page( array(
        'page_title' => 'Sitewide',
        'menu_title' => 'Site Settings',
        'menu_slug'  => 'sitewide',
        'capability' => 'manage_options',
        'redirect'   => false,
    ));
}

// Register primary nav menu location
register_nav_menus( array(
    'primary' => __( 'Primary Navigation', 'hello-child' ),
) );

// Notice banner in Customizer
function hello_child_customizer( $wp_customize ) {
    $wp_customize->add_section( 'hello_child_notice', array(
        'title'    => __( 'Notice Banner', 'hello-child' ),
        'priority' => 30,
    ));
    $wp_customize->add_setting( 'notice_banner_text', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control( 'notice_banner_text', array(
        'label'   => __( 'Banner text (leave empty to hide)', 'hello-child' ),
        'section' => 'hello_child_notice',
        'type'    => 'textarea',
    ));
}
add_action( 'customize_register', 'hello_child_customizer' );