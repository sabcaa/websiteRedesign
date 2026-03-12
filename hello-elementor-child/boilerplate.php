<?php
/**
 * Template Name: Content with Sidebar TOC
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Page Title Here',
    'subtitle' => 'A short descriptive sentence about this page.',
    'breadcrumbs' => array(
        'Home'       => '/',
        'Complaints' => '/complaints/',
    )
)); ?>

<div class="page-layout">
    <aside class="sidebar">
        <!-- TOC -->
    </aside>
    <main class="main-content">
        <!-- page content -->
    </main>
</div>

<?php get_footer(); ?>