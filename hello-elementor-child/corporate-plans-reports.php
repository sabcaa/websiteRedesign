<?php
/**
 * Template Name: Corporate Plans and Reports
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Corporate Plans and Reports',
    'subtitle' => 'Annual reports, business plans, and strategic direction of the College of Acupuncturists of Alberta.',
    'breadcrumbs' => array(
        'Home'       => '/',
        'Who we are' => '/about-the-college/',
    )
)); ?>

<div class="simple-page-layout">

    <!-- ANNUAL REPORTS -->
    <section class="content-section">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-chart-bar"></i></span>
            Annual Reports
        </h2>

        <?php get_template_part( 'template-parts/resource-download', null, array(
            'title' => '2024–25 Annual Report',
            'url'   => '/wp-content/uploads/2025/09/Annual-report-vA_WEB.pdf',
            'desc'  => 'The most recent annual report of the College of Acupuncturists of Alberta.',
        )); ?>

        <h3>Prior years</h3>
        <ul class="doc-list">
            <li>
                <div class="doc-row">
                    <span class="doc-name">2023–24 Annual Report</span>
                    <a href="/wp-content/uploads/2025/01/CAA_AnnualReport_2023-24_Web.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">2022–23 Annual Report</span>
                    <a href="/wp-content/uploads/2023/11/CAA-2022-23-AR-web.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">2021–22 Annual Report</span>
                    <a href="/wp-content/uploads/2022/11/CAA-AnnualReport-2021-22Web-Version.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">January–March 2021 Annual Report <span style="font-weight: normal; font-style: italic; font-size: 0.85em;">(fiscal year-end transition period)</span></span>
                    <a href="/wp-content/uploads/2022/09/2021Jan-Mar-AnnualReport.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">2020 Annual Report</span>
                    <a href="/wp-content/uploads/2022/09/2020-AnnualReport.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">2019 Annual Report</span>
                    <a href="/wp-content/uploads/2021/11/2019-Annual-Report.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">2018 Annual Report</span>
                    <a href="/wp-content/uploads/2021/11/2018AnnualReport-approved.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">2017 Annual Report</span>
                    <a href="/wp-content/uploads/2021/11/2017-Annual-Report.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">2016 Annual Report</span>
                    <a href="/wp-content/uploads/2021/11/2016-Annual-Report.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                </div>
            </li>
        </ul>
        <div class="callout" style="margin-top: 16px;">
            The College's fiscal year-end changed from December 31 to March 31 in 2021.
        </div>
    </section>

    <!-- BUSINESS PLAN -->
    <section class="content-section">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-bullseye"></i></span>
            Business Plan
        </h2>

        <h3>2025 Business Plan</h3>
        <p>The College's 2025 business plan includes the following targets:</p>
        <ol>
            <li>Publish a policy and procedure for auditing renewal applications and continuing competence program submissions.</li>
            <li>Complete a pilot audit of renewal applications and continuing competence program submissions.</li>
            <li>Publish a registration guide for applicants and registrants.</li>
            <li>Publish a hearings procedure.</li>
            <li>Complete a pilot test of the Acupuncture Education Program Review process.</li>
            <li>Complete a formal Acupuncture Education Program Review.</li>
            <li>Complete membership consultation of new standards of practice.</li>
            <li>Review the College's policy framework for gaps and develop any necessary operational and regulatory policies.</li>
            <li>Modernize College operations by converting PDF forms to online forms.</li>
            <li>Launch a modernized, online learning module to replace the safety exam.</li>
            <li>Develop an online learning module for sexual misconduct and abuse.</li>
        </ol>

        <h3>Prior years</h3>
        <ul class="doc-list">
            <li>
                <div class="doc-row">
                    <span class="doc-name">2024 Business Plan</span>
                    <a href="/wp-content/uploads/2024/05/2024-Business-Plan-CAA-LP01232.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">2023 Business Plan</span>
                    <a href="/wp-content/uploads/2023/06/2023-25-Business-Plan_FINAL.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">View document</a>
                </div>
            </li>
        </ul>
    </section>

    <!-- STRATEGIC PLAN -->
    <section class="content-section">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-compass"></i></span>
            Strategic Plan
        </h2>
        <p>The College's 5-year strategic plan guides overall organizational priorities and direction.</p>
        <?php get_template_part( 'template-parts/resource-download', null, array(
            'title' => '2023–27 Strategic Plan',
            'url'   => '/wp-content/uploads/2023/06/2023-27-Strategic-Plan_FINAL.pdf',
        )); ?>
    </section>

</div>

<?php get_footer(); ?>
