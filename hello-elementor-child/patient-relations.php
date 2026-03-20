<?php
/**
 * Template Name: Funds for Therapy and Counselling
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Funds for Therapy and Counselling',
    'subtitle' => 'Support available for patients who have experienced sexual abuse or misconduct by an acupuncturist.',
    'breadcrumbs' => array(
        'Home'       => '/',
        'Complaints' => '/complaint-process/',
    )
)); ?>

<div class="simple-page-layout">

    <!-- OVERVIEW -->
    <section class="content-section">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-circle-info"></i></span>
            Overview
        </h2>
        <p>The <em>Health Professions Act</em> requires that all regulatory health colleges, including the College of Acupuncturists of Alberta, establish a fund to provide treatment or counselling for patients who have experienced sexual abuse or sexual misconduct by an acupuncturist. This fund is referred to as the patient relations program.</p>
        <ul>
            <li>The patient relations program is available once a complaint of sexual abuse or misconduct is made.</li>
            <li>Funding is available for 5 years or until all funding is used, whichever comes first.</li>
            <li>Funding ends if the complaint is dismissed or there are no findings.</li>
            <li>The maximum amount of funding available is equivalent to 100 hours of psychiatric counselling at the rate set in the Schedule of Medical Benefits published by the Government of Alberta.</li>
        </ul>
    </section>

    <!-- ACCESS FUNDING -->
    <section class="content-section">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-hand-holding-heart"></i></span>
            Access funding
        </h2>
        <p>Funding may only be used to pay for treatment and counselling related to the complaint.</p>
        <p>The College contracts a third party to administer the program. After confirming a patient's eligibility for funding and counselling, the College will provide information about how to access the program.</p>
    </section>

    <!-- ADDITIONAL RESOURCES -->
    <section class="content-section">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-link"></i></span>
            Additional resources
        </h2>
        <p>There are a number of resources available to help you obtain the supports you need.</p>
        <ul class="doc-list">
            <li>
                <div class="doc-row">
                    <span class="doc-name">Association of Alberta Sexual Assault Services</span>
                    <a href="https://aasas.ca/" class="doc-action" target="_blank" rel="noopener noreferrer">
                        <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i> Visit website
                    </a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">Sexual Assault Centre of Edmonton</span>
                    <a href="https://www.sace.ca/" class="doc-action" target="_blank" rel="noopener noreferrer">
                        <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i> Visit website
                    </a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">Calgary Communities Against Sexual Abuse</span>
                    <a href="https://calgarycasa.com/" class="doc-action" target="_blank" rel="noopener noreferrer">
                        <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i> Visit website
                    </a>
                </div>
            </li>
        </ul>
    </section>

</div>

<?php get_footer(); ?>
