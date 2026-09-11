<?php
/**
 * Template Part: Sidebar TOC
 *
 * Usage in a page template file:
 *
 * get_template_part( 'template-parts/sidebar-toc', null, array(
 *     'items' => array(
 *         'Section label' => '#section-id',
 *         'Another label' => '#another-id',
 *     ),
 *     'cta_primary' => array(
 *         'label' => 'Button text',
 *         'url'   => '#section-id',
 *     ),
 *     'cta_secondary' => array(
 *         'label' => 'Button text',
 *         'url'   => '/some-page/',
 *     ),
 * ));
 *
 * Both cta_primary and cta_secondary are optional.
 * Omit either to not render that button.
 */

$items         = $args['items']         ?? array();
$cta_primary   = $args['cta_primary']   ?? null;
$cta_secondary = $args['cta_secondary'] ?? null;
$nav_groups    = $args['nav_groups']    ?? array(); // for policy pages
?>

<aside class="sidebar">

    <?php if ( ! empty( $items ) ) : ?>
        <nav class="toc-box" aria-label="On this page">
            <div class="toc-header">On this page</div>
            <ul class="toc-list">
                <?php foreach ( $items as $label => $url ) : ?>
                    <li>
                        <a href="<?php echo esc_attr( $url ); ?>">
                            <?php echo esc_html( $label ); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    <?php endif; ?>

      <?php if ( ! empty( $nav_groups ) ) : ?>
        <nav class="policy-nav-box" aria-label="Browse policies">
            <div class="toc-header">Policies</div>
            <?php foreach ( $nav_groups as $group_label => $policies ) : ?>
                <div class="policy-nav-group">
                    <div class="policy-nav-group-label"><?php echo esc_html( $group_label ); ?></div>
                    <ul class="policy-nav-list">
                        <?php foreach ( $policies as $policy ) : ?>
                            <li>
                                <a href="<?php echo esc_url( $policy['url'] ); ?>"
                                   class="<?php echo $policy['active'] ? 'active' : ''; ?>">
                                    <?php echo esc_html( $policy['label'] ); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </nav>
    <?php endif; ?>

    <?php if ( $cta_primary || $cta_secondary ) : ?>
        <div class="toc-cta">
            <?php if ( $cta_primary ) : ?>
                <a href="<?php echo esc_url( $cta_primary['url'] ); ?>" class="btn btn-primary">
                    <?php echo esc_html( $cta_primary['label'] ); ?>
                </a>
            <?php endif; ?>
            <?php if ( $cta_secondary ) : ?>
                <a href="<?php echo esc_url( $cta_secondary['url'] ); ?>" class="btn btn-secondary">
                    <?php echo esc_html( $cta_secondary['label'] ); ?>
                </a>
            <?php endif; ?>
        </div>
    <?php endif; ?>

</aside>

<!-- MOBILE TOC -->
<?php if ( ! empty( $items ) ) : ?>
    <details class="mobile-toc">
        <summary>On this page</summary>
        <ul>
            <?php foreach ( $items as $label => $url ) : ?>
                <li>
                    <a href="<?php echo esc_attr( $url ); ?>">
                        <?php echo esc_html( $label ); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </details>
<?php endif; ?>
