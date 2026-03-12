<?php
/**
 * Template Part: Page Hero Banner
 *
 * Usage in a page template file:
 *
 * get_template_part( 'template-parts/page-hero', null, array(
 *     'title'    => 'Page Title Here',
 *     'subtitle' => 'A short descriptive sentence about this page.',
 *     'breadcrumbs' => array(
 *         'Home'       => '/',
 *         'Complaints' => '/complaints/',
 *     )
 * ));
 *
 * The current page is always appended to the breadcrumb trail automatically.
 * 'breadcrumbs' is optional — omit the key to show no breadcrumbs.
 */

$title       = $args['title']       ?? get_the_title();
$subtitle    = $args['subtitle']    ?? '';
$breadcrumbs = $args['breadcrumbs'] ?? array();
?>

<div class="page-hero">

    <?php if ( ! empty( $breadcrumbs ) ) : ?>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <?php foreach ( $breadcrumbs as $label => $url ) : ?>
                <a href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?></a>
                <span aria-hidden="true">›</span>
            <?php endforeach; ?>
            <span class="breadcrumb-current"><?php echo esc_html( $title ); ?></span>
        </nav>
    <?php endif; ?>

    <h1><?php echo esc_html( $title ); ?></h1>

    <?php if ( ! empty( $subtitle ) ) : ?>
        <p class="page-hero-sub"><?php echo esc_html( $subtitle ); ?></p>
    <?php endif; ?>

</div>
