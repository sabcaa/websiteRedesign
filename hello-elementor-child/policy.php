<?php
/**
 * Template Name: Policy
 */

get_header();

$policy_number   = get_field('policy_number');
$version         = get_field('policy_version');
$effective_date  = get_field('effective_date');
$approved_date   = get_field('approved_date');
$version_history = get_field('version_history');
?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => get_the_title(),
    'subtitle' => $policy_number ? 'Policy ' . $policy_number : '',
    'breadcrumbs' => array(
        'Home'     => '/',
        'Policies' => '/policies/', // update to your actual hub page URL
    )
)); ?>

<div class="page-layout">

    <?php get_template_part( 'template-parts/sidebar-toc', null, array(
        'items' => array(
            'Introduction'    => '#introduction',
            'Purpose'         => '#purpose',
            'Definitions'     => '#definitions',
            'Policy'          => '#policy',
            'Authority'       => '#authority',
            'Scope'           => '#scope',
            'Related Policies' => '#related',
            'Version History' => '#version-history',
        ),
        'nav_groups' => policy_get_sidebar_nav_groups(),
    )); ?>

    <main class="main-content policy-content">

        <div class="policy-meta-bar">
            <?php if ( $policy_number ) : ?>
                <span class="policy-meta-item"><strong>Policy #:</strong> <?php echo esc_html( $policy_number ); ?></span>
            <?php endif; ?>
            <?php if ( $version ) : ?>
                <span class="policy-meta-item"><strong>Version:</strong> <?php echo esc_html( $version ); ?></span>
            <?php endif; ?>
            <?php if ( $effective_date ) : ?>
                <span class="policy-meta-item"><strong>Effective:</strong> <?php echo esc_html( $effective_date ); ?></span>
            <?php endif; ?>
            <?php if ( $approved_date ) : ?>
                <span class="policy-meta-item"><strong>Approved:</strong> <?php echo esc_html( $approved_date ); ?></span>
            <?php endif; ?>
        </div>

        <section class="content-section policy-body">
            <?php the_content(); ?>
        </section>

        <?php if ( ! empty( $version_history ) ) : ?>
            <section class="content-section" id="version-history">
                <h2>Version History</h2>
                <table class="caa-table" id="version-history">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ( $version_history as $row ) : ?>
                            <tr>
                                <td><?php echo esc_html( $row['history_date'] ); ?></td>
                                <td><?php echo esc_html( $row['history_notes'] ); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
        <?php endif; ?>

    </main>
</div>

<?php get_footer(); ?>