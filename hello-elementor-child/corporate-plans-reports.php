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
            Business Plans
        </h2>

        <div class="tabs" data-tabs>
            <div class="tabs-nav">
                <button type="button" class="tabs-arrow tabs-arrow--prev" aria-label="Scroll tabs left">
                    <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                </button>

                <div class="tabs-scroll">
                    <div class="tabs-list" role="tablist" aria-label="Business plans by year">
                        <button type="button" class="tab" role="tab" id="tab-bp-2026" aria-controls="panel-bp-2026" aria-selected="true">2026</button>
                        <button type="button" class="tab" role="tab" id="tab-bp-2025" aria-controls="panel-bp-2025" aria-selected="false" tabindex="-1">2025</button>
                        <button type="button" class="tab" role="tab" id="tab-bp-2024" aria-controls="panel-bp-2024" aria-selected="false" tabindex="-1">2024</button>
                        <button type="button" class="tab" role="tab" id="tab-bp-2023" aria-controls="panel-bp-2023" aria-selected="false" tabindex="-1">2023</button>
                    </div>
                </div>

                <button type="button" class="tabs-arrow tabs-arrow--next" aria-label="Scroll tabs right">
                    <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                </button>
            </div>

            <!-- ADD FUTURE YEARS HERE copy the div class of the prior year or entire prior year and update the content-->

            <!-- 2027 placeholder -->

            <!-- 2026 -->
            <div class="tab-panel" role="tabpanel" id="panel-bp-2026" aria-labelledby="tab-bp-2026">
                <p>The College's 2026 business plan includes the following targets:</p>
                <ol>
                    
                    <li>Analyze results of the pilot CCP audit and make improvements to the process as necessary.</li>
                    <li>Conduct a comprehensive review of CCP submissions from the past year to assess the quality and effectiveness of the CCP program in upholding professional standards.</li>
                    <li>Conduct a comprehensive review of existing standards of practice, policies, and procedures to ensure alignment with legislative changes.</li>
                    <li>Improve communications with registrants through town hall meetings or webinars.</li>
                    <li>Research opportunities around applying automation and AI tools to realize operational efficiencies.</li>
                    <li>Improve digital records management by implementing best practices.</li>
                    <li>Develop a formal cancellation application to streamline operations and ensure the integrity of the registry.</li>
                    <li>Draft a practice visit procedure.</li>
                </ol>
            </div>

            <!-- 2025 -->
            <div class="tab-panel" role="tabpanel" id="panel-bp-2025" aria-labelledby="tab-bp-2025" hidden>
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
            </div>

            <!-- 2024 -->
            <div class="tab-panel" role="tabpanel" id="panel-bp-2024" aria-labelledby="tab-bp-2024" hidden>
                <p><a href="/wp-content/uploads/2024/05/2024-Business-Plan-CAA-LP01232.pdf" target="_blank" rel="noopener noreferrer">View the 2024 Business Plan</a></p>
            </div>

            <!-- 2023 -->
            <div class="tab-panel" role="tabpanel" id="panel-bp-2023" aria-labelledby="tab-bp-2023" hidden>
                <p><a href="/wp-content/uploads/2023/06/2023-25-Business-Plan_FINAL.pdf" target="_blank" rel="noopener noreferrer">View the 2023 Business Plan</a></p>
            </div>
        </div>
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
