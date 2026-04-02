<?php
/**
 * Header template
 * College of Acupuncturists of Alberta - Child Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header">

    <?php
    $notice = get_theme_mod( 'notice_banner_text', '' );
    if ( ! empty( trim( $notice ) ) ) : ?>
        <div id="notice-banner">
            <div class="header-inner">
                <?php echo wp_kses_post( $notice ); ?>
            </div>
        </div>
    <?php endif; ?>

    <div id="main-header">
        <div class="header-inner">

            <!-- Logo -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo" aria-label="<?php bloginfo( 'name' ); ?> — Home">
                <img
                    src="<?php echo esc_url( content_url( '/uploads/2021/11/acupuncture-alberta-logo-gradient_360x130.png' ) ); ?>"
                    alt="<?php bloginfo( 'name' ); ?>"
                    width="360"
                    height="130"
                />
            </a>

            <!-- Nav -->
            <nav id="primary-nav" aria-label="Primary navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'primary-menu',
                    'container'      => false,
                    'items_wrap'     => '<ul class="primary-menu">%3$s</ul>',
                    'depth'          => 3,
                ) );
                ?>
            </nav>

            <!-- Search toggle -->
            <button id="search-toggle" aria-label="Open search" aria-expanded="false">
                <i class="fas fa-search" aria-hidden="true"></i>
            </button>

            <!-- Mobile hamburger -->
            <button id="mobile-menu-toggle" aria-label="Open menu" aria-expanded="false">
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
            </button>

        </div><!-- .header-inner -->
    </div><!-- #main-header -->

    <!-- Search overlay -->
    <div id="search-overlay" aria-hidden="true">
        <div class="search-overlay-inner">
            <?php get_search_form(); ?>
            <button id="search-close" aria-label="Close search">
                <i class="fas fa-times" aria-hidden="true"></i>
            </button>
        </div>
    </div>

</header>
