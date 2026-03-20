<?php
/**
 * Template Name: Simple Page
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => get_the_title(),
    'subtitle' => get_the_excerpt(),
)); ?>

<div class="simple-page-layout">
    <div class="content-section">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>