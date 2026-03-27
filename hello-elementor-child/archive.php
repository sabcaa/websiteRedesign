<?php
/**
 * Archive Template
 * Used for the main posts archive (/posts/) and category archives (/news/category-name/).
 */

get_header();

// Determine if we're on a category archive or the main posts page
$is_category = is_category();
$archive_title = $is_category ? single_cat_title( '', false ) : 'News';
$archive_subtitle = $is_category
    ? 'Browsing all posts in this category.'
    : 'Updates and notices from the College of Acupuncturists of Alberta.';
?>

<div class="page-hero">
    <div class="page-hero-inner">
        <h1><?php echo esc_html( $archive_title ); ?></h1>
        <p class="page-hero-sub"><?php echo esc_html( $archive_subtitle ); ?></p>
    </div>
</div>

<div class="post-layout">

    <?php if ( $is_category ) : ?>
        <a href="<?php echo esc_url( home_url( '/posts/' ) ); ?>" class="post-back-link archive-back-link">
            <i class="fa-solid fa-arrow-left" aria-hidden="true"></i> All news
        </a>
    <?php endif; ?>

    <?php if ( have_posts() ) : ?>
        <div class="archive-list">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="archive-card">
                    <div class="archive-card-meta">
                        <span class="post-date">
                            <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                            <?php echo get_the_date( 'F j, Y' ); ?>
                        </span>
                        <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) :
                            foreach ( $categories as $cat ) :
                                $cat_url = get_category_link( $cat->term_id );
                        ?>
                                <span class="post-meta-divider" aria-hidden="true">·</span>
                                <a href="<?php echo esc_url( $cat_url ); ?>" class="post-tag post-tag--small">
                                    <?php echo esc_html( $cat->name ); ?>
                                </a>
                        <?php
                            endforeach;
                        endif; ?>
                    </div>

                    <h2 class="archive-card-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <?php if ( has_excerpt() ) : ?>
                        <p class="archive-card-excerpt"><?php the_excerpt(); ?></p>
                    <?php endif; ?>

                    <a href="<?php the_permalink(); ?>" class="archive-card-link">
                        Read more <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <?php
        $pagination = paginate_links( array(
            'prev_text' => '<i class="fa-solid fa-arrow-left" aria-hidden="true"></i> Newer',
            'next_text' => 'Older <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>',
            'type'      => 'list',
        ));
        if ( $pagination ) : ?>
            <nav class="archive-pagination" aria-label="Posts navigation">
                <?php echo $pagination; ?>
            </nav>
        <?php endif; ?>

    <?php else : ?>
        <div class="post-card">
            <p>No posts found.</p>
        </div>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
