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
        
        } elseif ( 'policy.php' === get_page_template_slug() ) {
            wp_enqueue_style(
                'hello-child-policy',
                get_stylesheet_directory_uri() . '/css/policy.css',
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
    
    // Load post, search, and archive styles
    if ( is_single() || is_archive() || is_home() || is_search() || get_query_var('s') !== '' )  {
        wp_enqueue_style(
            'hello-child-post-styles',
            get_stylesheet_directory_uri() . '/css/single.css',
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


// Font awesome
function hello_child_upgrade_font_awesome() {
    wp_dequeue_style( 'font-awesome' );
    wp_enqueue_style(
        'font-awesome-6',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        array(),
        '6.5.0'
    );
}
add_action( 'wp_enqueue_scripts', 'hello_child_upgrade_font_awesome', 20 );

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

// for the policy pages side nav to go between policy pages
function policy_get_sidebar_nav_groups() {
    if ( ! is_page() ) {
        return array();
    }

    $current_id = get_the_ID();
    $category_page = get_post_parent( $current_id ); // e.g. "Governance Policies"

    if ( ! $category_page ) {
        return array();
    }

    $hub_page = get_post_parent( $category_page->ID ); // e.g. "Policies"
    $category_pages = $hub_page
        ? get_pages( array( 'child_of' => $hub_page->ID, 'parent' => $hub_page->ID, 'sort_column' => 'menu_order' ) )
        : array( $category_page );

    $groups = array();
    foreach ( $category_pages as $cat ) {
        $children = get_pages( array( 'parent' => $cat->ID, 'sort_column' => 'menu_order' ) );
        if ( empty( $children ) ) {
            continue;
        }
        $groups[ $cat->post_title ] = array_map( function( $child ) use ( $current_id ) {
            return array(
                'label'  => $child->post_title,
                'url'    => get_permalink( $child->ID ),
                'active' => ( $child->ID === $current_id ),
            );
        }, $children );
    }

    return $groups;
}

// for Policy on-page TOC
/**
 * Scans rendered content for H2s, adds an id="" to each one
 * (based on its text, if it doesn't already have one), and
 * returns both the modified content and a ready-to-use TOC array.
 */
function policy_add_heading_anchors( $content ) {
    if ( empty( $content ) ) {
        return array( 'content' => $content, 'toc' => array() );
    }

    libxml_use_internal_errors( true );
    $dom = new DOMDocument();
    $dom->loadHTML(
        '<?xml encoding="utf-8" ?>' . $content,
        LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
    );
    libxml_clear_errors();

    $headings   = $dom->getElementsByTagName('h2');
    $toc        = array();
    $used_slugs = array();

    foreach ( $headings as $heading ) {
        $text = trim( $heading->textContent );
        if ( '' === $text ) {
            continue;
        }

        if ( $heading->hasAttribute('id') ) {
            $slug = $heading->getAttribute('id'); // respect a manual override
        } else {
            $slug = sanitize_title( $text );
            $base = $slug;
            $i = 2;
            while ( in_array( $slug, $used_slugs, true ) ) {
                $slug = $base . '-' . $i++;
            }
            $heading->setAttribute( 'id', $slug );
        }

        $used_slugs[] = $slug;
        $toc[ $text ] = '#' . $slug;
    }

    return array(
        'content' => $dom->saveHTML(),
        'toc'     => $toc,
    );
}

// flag policy pages in the Pages screen of WordPress backend
// Add a "Type" column to the Pages admin list
add_filter('manage_pages_columns', function($columns) {
    $columns['policy_flag'] = 'Type';
    return $columns;
});

add_action('manage_pages_custom_column', function($column, $post_id) {
    if ($column === 'policy_flag' && get_page_template_slug($post_id) === 'policy.php') {
        echo '<span style="background:var(--blue,#004A8D);color:#fff;padding:2px 8px;border-radius:4px;font-size:11px;font-weight:600;">POLICY</span>';
    }
}, 10, 2);

// Add a "Policies only" filter dropdown above the Pages list
add_action('restrict_manage_posts', function($post_type) {
    if ($post_type !== 'page') return;
    $selected = $_GET['policy_filter'] ?? '';
    ?>
    <select name="policy_filter">
        <option value="">All pages</option>
        <option value="policy" <?php selected($selected, 'policy'); ?>>Policies only</option>
    </select>
    <?php
});

add_action('pre_get_posts', function($query) {
    global $pagenow;
    if (is_admin() && $query->is_main_query() && $pagenow === 'edit.php'
        && ($_GET['post_type'] ?? '') === 'page'
        && ($_GET['policy_filter'] ?? '') === 'policy') {
        $query->set('meta_key', '_wp_page_template');
        $query->set('meta_value', 'policy.php');
    }
});