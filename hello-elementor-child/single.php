<?php
/**
 * Single Post Template
 * Used for all individual news posts.
 */

get_header(); ?>

<div class="page-hero">
    <div class="page-hero-inner">
        <h1><?php the_title(); ?></h1>
        <p class="page-hero-sub">
            <span class="post-date">
                <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                <?php echo get_the_date( 'F j, Y' ); ?>
            </span>
            <?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) :
                $cat = $categories[0];
                $cat_url = get_category_link( $cat->term_id );
            ?>
                <span class="post-meta-divider" aria-hidden="true">·</span>
                <span class="post-category">
                    <i class="fa-solid fa-tag" aria-hidden="true"></i>
                    <a href="<?php echo esc_url( $cat_url ); ?>"><?php echo esc_html( $cat->name ); ?></a>
                </span>
            <?php endif; ?>
        </p>
    </div>
</div>

<div class="post-layout">
    <article class="post-card">
        <div class="post-content">
            <?php the_content(); ?>
        </div>

        <footer class="post-footer">
            <?php
            $all_categories = get_the_category();
            if ( ! empty( $all_categories ) ) : ?>
                <div class="post-tags">
                    <?php foreach ( $all_categories as $cat ) :
                        $cat_url = get_category_link( $cat->term_id );
                    ?>
                        <a href="<?php echo esc_url( $cat_url ); ?>" class="post-tag">
                            <?php echo esc_html( $cat->name ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ? get_post_type_archive_link( 'post' ) : home_url( '/posts/' ) ); ?>" class="post-back-link">
                <i class="fa-solid fa-arrow-left" aria-hidden="true"></i> Back to News
            </a>
        </footer>
    </article>
</div>

<?php get_footer(); ?>
