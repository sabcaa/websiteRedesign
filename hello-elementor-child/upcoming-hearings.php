<?php
/**
 * Template Name: Hearings and decisions
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Hearings and decisions',
    'subtitle' => 'All upcoming hearings and decisions from concluded hearings.',
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
                'Upcoming hearings' => '#upcoming-hearings',
                'Hearing decisions' => '#hearing-decisions',
                ),
            )); 
        ?>
    </aside>
    <main class="main-content">
        <section class="content-section" id="upcoming-hearings">
            <p>A hearing is a formal process used to resolve complaints received by the College of Acupuncturists of Alberta. A hearing tribunal hears the complaint and evidence against investigated members.</p>
            
            <!--tablepress shortcode,  table has heading as part of it-->
            <?php echo do_shortcode('[table id=1 /]'); ?>

            <p>A hearing is open to the public unless the Hearing Tribunal closes it. To pre-register to attend, fill out the online Virtual Hearings Observer Form. Observers and participants are expected to follow the virtual hearing guidelines when attending a hearing.</p>
            <p>If you would like more information regarding hearings, contact our Hearings Director at hearingsdirector@acupuncturealberta.ca.</p>

             <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Virtual Hearing Guidelines for Observers',
                'url' => get_field('docguidelinesobservers'),
                'desc'  => 'Guidelines observers of a hearing must follow when attending.',
            )); ?>

              <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Virtual Hearing Guidelines for Participants',
                'url' => get_field('docguidelinesparticipants'),
                'desc'  => 'Guidelines participants in a hearing must follow when attending.',
            )); ?>

        </section>
        <section class="content-section" id="hearing-decisions">
             <!--tablepress shortcode, table has heading as part of it-->
            <?php echo do_shortcode('[table id=2 /]'); ?>
        </section>
    </main>
</div>

<?php get_footer(); ?>