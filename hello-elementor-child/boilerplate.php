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
                
        <?php get_template_part( 'template-parts/sidebar-toc', null, array(
                'items' => array(
                'Section label' => '#section-id',
                'Another label' => '#another-id',
                ),
            )); 
        ?>
    </aside>

    <main class="main-content">
        <!-- page content -->
        <section class="content-section" id="id-for-TOC">
            <h2>
                <span class="section-icon"><i class="font-awesome-id"></i></span>
                Heading
            </h2>
            
        <!--resource download template example -->
         <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Registration Guide',
                'url' => get_field('docregistrationguide'),
                'desc'  => 'A complete overview of the registration process.',
            )); ?>

    </main>
</div>

<?php get_footer(); ?>