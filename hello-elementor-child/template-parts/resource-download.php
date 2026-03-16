<?php
/**
 * Template Part: Resource Download Card
 *
 * A prominent styled card for a single downloadable resource.
 * Use when a document is a primary action — something the user
 * is expected to download and use (not just a supplementary reference).
 * For supplementary references, use an inline link instead.
 *
 * Usage:
 *
 * get_template_part( 'template-parts/resource-download', null, array(
 *     'title' => 'New Graduates Registration Checklist',
 *     'url'   => 'https://www.acupuncturealberta.ca/wp-content/uploads/checklist.pdf',
 *     'desc'  => 'Optional short description of what this document contains.',
 * ));
 *
 * 'desc' is optional — omit to show title and download arrow only.
 */

$title = $args['title'] ?? '';
$url   = $args['url']   ?? '#';
$desc  = $args['desc']  ?? '';

if ( empty( $title ) ) return;
?>

<a href="<?php echo esc_url( $url ); ?>"
   class="resource-download"
   target="_blank"
   rel="noopener noreferrer">

    <span class="resource-download-icon" aria-hidden="true">
        <i class="fa-solid fa-file-arrow-down"></i>
    </span>

    <span class="resource-download-body">
        <span class="resource-download-title">
            <?php echo esc_html( $title ); ?>
        </span>
        <?php if ( ! empty( $desc ) ) : ?>
            <span class="resource-download-desc">
                <?php echo esc_html( $desc ); ?>
            </span>
        <?php endif; ?>
    </span>

    <span class="resource-download-action">
        <i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
        Download
    </span>

</a>
