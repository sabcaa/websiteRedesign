<?php
/**
 * Search Results Template
 * Used for the search results page when site search is used.
 */

get_header();

$search_query = get_search_query();
?>

<div class="page-hero">
    <div class="page-hero-inner">
        <h1>Search Results</h1>
        <p class="page-hero-sub">
            <?php if ( $search_query ) : ?>
                Showing results for: <?php echo esc_html( $search_query ); ?>
            <?php endif; ?>
        </p>
    </div>
</div>

<div class="post-layout">

    <?php if ( have_posts() ) : ?>
        <div class="archive-list">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="archive-card">

                    <h2 class="archive-card-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <?php if ( get_post_type() === 'post' ) : ?>
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

                        <?php if ( has_excerpt() ) : ?>
                            <p class="archive-card-excerpt"><?php the_excerpt(); ?></p>
                        <?php endif; ?>
                    <?php endif; ?>

                    <a href="<?php the_permalink(); ?>" class="archive-card-link">
                        View page <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>

                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <?php
        $pagination = paginate_links( array(
            'prev_text' => '<i class="fa-solid fa-arrow-left" aria-hidden="true"></i> Previous',
            'next_text' => 'Next <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>',
            'type'      => 'list',
        ));
        if ( $pagination ) : ?>
            <nav class="archive-pagination" aria-label="Search results navigation">
                <?php echo $pagination; ?>
            </nav>
        <?php endif; ?>

    <?php else : ?>
        <div class="post-card">
            <p>No results found for <strong><?php echo esc_html( $search_query ); ?></strong>. Try a different search term.</p>
        </div>
    <?php endif; ?>

</div>

<?php get_footer(); ?>