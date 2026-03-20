<?php
/**
 * Template Name: Forms and Requests
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Forms and Requests',
    'subtitle' => 'Downloadable forms and online request links for College members.',
    'breadcrumbs' => array(
        'Home'      => '/',
        'Resources' => '/resources/',
    )
)); ?>

<div class="simple-page-layout">

    <section class="content-section">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-file-lines"></i></span>
            Request documentation
        </h2>
        <ul class="doc-list">
            <li>
                <div class="doc-row">
                    <span class="doc-name">Letter of standing request</span>
                    <a href="/letter-of-standing/" class="doc-action">
                       Go to form <i class="fa-solid fa-arrow-right" aria-hidden="true"></i> 
                    </a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">Release of documentation request</span>
                    <a href="/letter-of-standing/" class="doc-action">
                       Go to form <i class="fa-solid fa-arrow-right" aria-hidden="true"></i> 
                    </a>
                </div>
            </li>
     
         
        </ul>
    </section>

    
    <section class="content-section">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-file-lines"></i></span>
            Supervision
        </h2>
            <ul class="doc-list">
               <li>
                <div class="doc-row">
                    <span class="doc-name">Supervision Agreement Form</span>
                    <a href="/wp-content/uploads/2023/11/Supervision-Agreement-Form.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Supervision Evaluation Report Template</span>
                        <a href="/wp-content/uploads/2023/07/Supervision-Evaluation-Report-Template.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                    </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Appointment Log Template</span>
                        <a href="/wp-content/uploads/2023/07/Appointment-Log.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                    </div>
                </li>
            </ul>

</div>

<?php get_footer(); ?>
