<?php
/**
 * Template Name: Governance Documents
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Governance Documents',
    'subtitle' => 'Policies, procedures, bylaws, and standards of the College of Acupuncturists of Alberta.',
    'breadcrumbs' => array(
        'Home'      => '/',
        'Resources' => '/resources/',
    )
)); ?>

<div class="page-layout">

    <?php get_template_part( 'template-parts/sidebar-toc', null, array(
        'items' => array(
            'Bylaws'                                    => '#bylaws',
            'Regulatory committee terms of reference'  => '#terms-of-reference',
            'Governance policies and procedures'        => '#governance-policies',
            'Regulatory policies and procedures'        => '#regulatory-policies',
            'Code of conduct and standards'             => '#code-of-conduct',
            'Operations policies and procedures'        => '#operations-policies',
            'Other'                                     => '#other',
        ),
    )); ?>

    <main class="main-content">

        <!-- BYLAWS -->
        <section class="content-section" id="bylaws">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-scale-balanced"></i></span>
                Bylaws
            </h2>
            <ul class="doc-list">
                <li>
                    <div class="doc-row">
                        <span class="doc-name">College of Acupuncturists of Alberta Bylaws</span>
                        <a href="/wp-content/uploads/2024/04/Bylaws-approved-July-3-2025-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
            </ul>
        </section>

        <!-- TERMS OF REFERENCE -->
        <section class="content-section" id="terms-of-reference">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-sitemap"></i></span>
                Regulatory committee terms of reference
            </h2>
            <ul class="doc-list">
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Acupuncture Education Program Review Committee Terms of Reference</span>
                        <a href="/wp-content/uploads/2023/06/Final-Acupuncture-Education-Program-Review-Committee-TOR-Nov-2022.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Competence Committee Terms of Reference</span>
                        <a href="/wp-content/uploads/2023/06/Final-Competence-Committee-TOR-2022-10.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Registration Examination Committee Terms of Reference</span>
                        <a href="/wp-content/uploads/2023/06/Final-Registration-Examination-Committee-TOR-2022-10.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
            </ul>
        </section>

        <!-- GOVERNANCE POLICIES -->
        <section class="content-section" id="governance-policies">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-building-columns"></i></span>
                Governance policies and procedures
            </h2>
            <ul class="doc-accordion">

                <li class="doc-accordion-item">
                    <div class="doc-accordion-trigger">
                        <div class="doc-accordion-left">
                            <span class="doc-name">G.1.0 Appointment to Council Policy</span>
                        </div>
                        <div class="doc-accordion-right">
                            <a href="/wp-content/uploads/2022/09/G.1.0-Appointment-to-the-Council-Policy-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation();">
                               View document
                            </a>
                            <i class="fa-solid fa-chevron-down doc-accordion-chevron" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="doc-accordion-children">
                        <div class="doc-row">
                            <span class="doc-name">G.1.0.1 Appointment to Council and Regulatory Committees Procedure</span>
                            <a href="/wp-content/uploads/2023/11/G.1.0.1-Appointment-to-the-Council-and-Regulatory-Committees-Procedure.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                               View document
                            </a>
                        </div>
                    </div>
                </li>

                <li class="doc-accordion-item">
                    <div class="doc-accordion-trigger">
                        <div class="doc-accordion-left">
                            <span class="doc-name">G.1.1 Code of Conduct and Ethics Policy</span>
                        </div>
                        <div class="doc-accordion-right">
                            <a href="/wp-content/uploads/2024/09/G.1.1-Code-of-Conduct-and-Ethics-Policy.pdf" class="doc-action" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation();">
                               View document
                            </a>
                            <i class="fa-solid fa-chevron-down doc-accordion-chevron" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="doc-accordion-children">
                        <div class="doc-row">
                            <span class="doc-name">G.1.1.1 Code of Conduct and Ethics Declarations Procedure</span>
                            <a href="/wp-content/uploads/2022/10/G.1.1.1-Code-of-Conduct-and-Ethics-Declaration-Procedure.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                               View document
                            </a>
                        </div>
                        <div class="doc-row">
                            <span class="doc-name">G.1.1.2 Conflict of Interest Declaration Procedure</span>
                            <a href="/wp-content/uploads/2022/10/G.1.1.2-Conflict-of-Interest-Declaration-Procedure-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                               View document
                            </a>
                        </div>
                        <div class="doc-row">
                            <span class="doc-name">G.1.1.3 Code of Conduct and Ethics Violation Reporting Procedure</span>
                            <a href="/wp-content/uploads/2022/10/G.1.1.3-Code-of-Conduct-and-Ethics-Violation-Reporting-Procedure-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                               View document
                            </a>
                        </div>
                    </div>
                </li>



                <li class="doc-accordion-item">
                    <div class="doc-row">
                        <span class="doc-name">G.1.2 Delegation to the CEO-Registrar Policy</span>
                        <a href="/wp-content/uploads/2023/11/G.1.2-Delegation-to-the-CEO-Registrar-Policy-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li class="doc-accordion-item">
                    <div class="doc-row">
                        <span class="doc-name">G.1.3 Succession Planning Policy</span>
                        <a href="/wp-content/uploads/2022/09/G.1.3-Succession-Planning-Policy-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li class="doc-accordion-item">
                    <div class="doc-row">
                        <span class="doc-name">G.1.4 Strategic Planning Policy</span>
                        <a href="/wp-content/uploads/2022/09/G.1.4-Strategic-Planning-Policy-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li class="doc-accordion-item">
                    <div class="doc-row">
                        <span class="doc-name">G.1.5 Programs and Services Policy</span>
                        <a href="/wp-content/uploads/2022/09/G.1.5-Programs-and-Services-Policy-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li class="doc-accordion-item">
                    <div class="doc-row">
                        <span class="doc-name">G.1.6 Financial Oversight Policy</span>
                        <a href="/wp-content/uploads/2022/09/G.1.6-Financial-Oversight-Policy-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>

                
                <li class="doc-accordion-item">
                    <div class="doc-accordion-trigger">
                        <div class="doc-accordion-left">
                            <span class="doc-name">G.1.7 Policy and Procedure Development and Management Policy</span>
                        </div>
                        <div class="doc-accordion-right">
                            <a href="/wp-content/uploads/2022/09/G.1.7-Policy-and-Procedure-Development-and-Management-Policy-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation();">
                               View document
                            </a>
                            <i class="fa-solid fa-chevron-down doc-accordion-chevron" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="doc-accordion-children">
                        <div class="doc-row">
                            <span class="doc-name">G.1.7.1 Policy and Procedure Development and Management Procedure</span>
                            <a href="/wp-content/uploads/2022/10/G.1.7.1-Policy-and-Procedure-Development-and-Management-Procedure-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                               View document
                            </a>
                        </div>
                    </div>
                </li>

                <li class="doc-accordion-item">
                    <div class="doc-row">
                        <span class="doc-name">G.1.8 Risk Oversight Policy</span>
                        <a href="/wp-content/uploads/2022/09/G.1.8-Risk-Oversight-Policy-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li class="doc-accordion-item">
                    <div class="doc-row">
                        <span class="doc-name">G.1.9 Investment Policy</span>
                        <a href="/wp-content/uploads/2022/10/G.1.9-Investment-Policy-v2-_WebNoAppendices.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>

            </ul>
        </section>

        <!-- REGULATORY POLICIES -->
        <section class="content-section" id="regulatory-policies">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-gavel"></i></span>
                Regulatory policies and procedures
            </h2>

            
            <ul class="doc-accordion">
                 <li class="doc-accordion-item">
                    <div class="doc-row">
                        <span class="doc-name">R.1.1 Continuing Competence Program Policy</span>
                        <a href="/wp-content/uploads/2022/10/R.1.1-Continuing-Competence-Program-Policy.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>

                <li class="doc-accordion-item">
                    <div class="doc-accordion-trigger">
                        <div class="doc-accordion-left">
                            <span class="doc-name">R.1.2 Registration Policy</span>
                        </div>
                        <div class="doc-accordion-right">
                            <a href="/wp-content/uploads/2023/08/R.1.2-Registration-Policy.pdf" class="doc-action" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation();">
                               View document
                            </a>
                            <i class="fa-solid fa-chevron-down doc-accordion-chevron" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="doc-accordion-children">
                        <div class="doc-row">
                            <span class="doc-name">R.1.2.1 Registration Procedure</span>
                            <a href="/wp-content/uploads/2023/11/R.1.2.1-Registration-Procedure.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                               View document
                            </a>
                        </div>
                        <div class="doc-row">
                            <span class="doc-name">R.1.2.2 Renewal and CCP Audit Procedure</span>
                            <a href="/wp-content/uploads/2026/03/R.1.2.2-Renewal-and-CCP-Audit-Procedure.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                               View document
                            </a>
                        </div>
                    </div>
                </li>

                <li class="doc-accordion-item">
                    <div class="doc-accordion-trigger">
                        <div class="doc-accordion-left">
                            <span class="doc-name">R.1.3 Acupuncture Education Program Review Policy</span>
                        </div>
                        <div class="doc-accordion-right">
                            <a href="/wp-content/uploads/2025/01/R.1.3-AEPR-Policy-v.2.pdf" class="doc-action" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation();">
                               View document
                            </a>
                            <i class="fa-solid fa-chevron-down doc-accordion-chevron" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="doc-accordion-children">
                        <div class="doc-row">
                            <span class="doc-name">R.1.3.1 Acupuncture Education Program Review Procedure</span>
                            <a href="/wp-content/uploads/2025/01/R.1.3.1-AEPR-Procedure-v.2.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                               View document
                            </a>
                        </div>
                    </div>
                </li>

                <li class="doc-accordion-item">
                    <div class="doc-accordion-trigger">
                        <div class="doc-accordion-left">
                            <span class="doc-name">R.1.4 Complaints Management Policy</span>
                        </div>
                        <div class="doc-accordion-right">
                            <a href="/wp-content/uploads/2024/01/R.1.4-Complaints-Management-Policy-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation();">
                               View document
                            </a>
                            <i class="fa-solid fa-chevron-down doc-accordion-chevron" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="doc-accordion-children">
                        <div class="doc-row">
                            <span class="doc-name">R.1.4.1 Complaints Management Procedure</span>
                            <a href="/wp-content/uploads/2023/11/R.1.4.1-Complaints-Management-Procedure-v.1-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                               View document
                            </a>
                        </div>
                    </div>
                </li>

                <li class="doc-accordion-item">
                    <div class="doc-accordion-trigger">
                        <div class="doc-accordion-left">
                            <span class="doc-name">R.1.5 Hearings Management Policy</span>
                        </div>
                        <div class="doc-accordion-right">
                            <a href="/wp-content/uploads/2023/11/R.1.5-Hearings-Management-Policy-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation();">
                               View document
                            </a>
                            <i class="fa-solid fa-chevron-down doc-accordion-chevron" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="doc-accordion-children">
                        <div class="doc-row">
                            <span class="doc-name">R.1.5.1 Hearings Management Procedure</span>
                            <a href="/wp-content/uploads/2025/04/R.1.5.1-Hearings-Management-Procedure-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                               View document
                            </a>
                        </div>
                    </div>
                </li>

       
               
                <li class="doc-accordion-item">
                    <div class="doc-row">
                        <span class="doc-name">Examination Application Guide</span>
                        <a href="/wp-content/uploads/2026/01/Examination-Application-Guide.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li class="doc-accordion-item">
                    <div class="doc-row">
                        <span class="doc-name">CAA Guideline – Practicing during Covid-19</span>
                        <a href="/wp-content/uploads/2022/06/PO-07C1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>

            </ul>
        </section>

        <!-- CODE OF CONDUCT -->
        <section class="content-section" id="code-of-conduct">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-shield-halved"></i></span>
                Code of conduct and standards of practice
            </h2>
            <ul class="doc-list">
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Code of Professional Conduct</span>
                        <a href="/wp-content/uploads/2021/11/code-of-professional-conduct-new-logo.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Standard of Practice – Continuing Competence</span>
                        <a href="/wp-content/uploads/2023/04/Continuing-Competence-Program-Standard-of-Practice.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Standard of Practice – Patient Records</span>
                        <a href="/wp-content/uploads/2023/05/SOP-Patient-Records-Standards-2022-07.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Standard of Practice – Performance of a Restricted Activity</span>
                        <a href="/wp-content/uploads/2023/04/Performance-of-Restricted-Activities-Standards-of-Practice.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Standard of Practice – Preventing Female Genital Mutilation</span>
                        <a href="/wp-content/uploads/2023/05/Preventing-FGM-Standard-of-Practice.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Standard of Practice – Sexual Abuse/Misconduct</span>
                        <a href="/wp-content/uploads/2021/11/SP-04-SOP-Sexual-Abuse-211119.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Standards of Competency and Practice</span>
                        <a href="/wp-content/uploads/2023/05/SOP-Standards-of-Competency-and-Practice-2022-07.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
            </ul>
        </section>

        <!-- OPERATIONS POLICIES -->
        <section class="content-section" id="operations-policies">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-gear"></i></span>
                Operations policies and procedures
            </h2>
            <ul class="doc-accordion">

                <li class="doc-accordion-item">
                    <div class="doc-accordion-trigger">
                        <div class="doc-accordion-left">
                            <span class="doc-name">O.2.3 Honoraria and Non-Employee Expense Policy</span>
                        </div>
                        <div class="doc-accordion-right">
                            <a href="/wp-content/uploads/2022/11/O.2.3-Honorarium-and-Expense-Policy.pdf" class="doc-action" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation();">
                               View document
                            </a>
                            <i class="fa-solid fa-chevron-down doc-accordion-chevron" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="doc-accordion-children">
                        <div class="doc-row">
                            <span class="doc-name">O.2.3.1 Honoraria and Non-Employee Expense Claim Form</span>
                            <a href="/expense-claim-form/" class="doc-action">
                                <i class="fa-solid fa-arrow-right" aria-hidden="true"></i> Go to form
                            </a>
                        </div>
                    </div>
                </li>

                <li class="doc-accordion-item">
                    <div class="doc-accordion-trigger">
                        <div class="doc-accordion-left">
                            <span class="doc-name">O.4.0 Records Management Policy</span>
                        </div>
                        <div class="doc-accordion-right">
                            <a href="/wp-content/uploads/2023/08/O.4.0-Records-Management-Policy-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation();">
                               View document
                            </a>
                            <i class="fa-solid fa-chevron-down doc-accordion-chevron" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="doc-accordion-children">
                        <div class="doc-row">
                            <span class="doc-name">O.4.0.1 Records Management Procedure</span>
                            <a href="/wp-content/uploads/2023/08/O.4.0.1-Records-Management-Procedure-1.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                               View document
                            </a>
                        </div>
                        <div class="doc-row">
                            <span class="doc-name">O.4.0.2 Records Request Form</span>
                            <a href="/wp-content/uploads/2023/08/O.4.0.2-Records-Request-Form.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                               View document
                            </a>
                        </div>
                    </div>
                </li>

            </ul>
        </section>

        <!-- OTHER -->
        <section class="content-section" id="other">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-folder-open"></i></span>
                Other
            </h2>
            <ul class="doc-list">
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Alberta Competency Standard for Acupuncturists</span>
                        <a href="/wp-content/uploads/2023/04/Competencies_CAA.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">College of Acupuncturists of Alberta Fee Schedule</span>
                        <a href="/wp-content/uploads/2023/06/Fee-schedule_Feb20233.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Safety Handbook</span>
                        <a href="/wp-content/uploads/2024/07/CAA-Safety-Handbook-v1.2.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Jurisprudence Handbook</span>
                        <a href="/wp-content/uploads/2025/06/Jurisprudence-Handbook.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
                <li>
                    <div class="doc-row">
                        <span class="doc-name">Hearings Handbook</span>
                        <a href="/wp-content/uploads/2025/06/Hearings-Handbook.pdf" class="doc-action" target="_blank" rel="noopener noreferrer">
                           View document
                        </a>
                    </div>
                </li>
            </ul>
        </section>

    </main>
</div>

<!-- Accordion JS -->
<script>
    document.querySelectorAll('.doc-accordion-trigger').forEach(trigger => {
        trigger.addEventListener('click', function() {
            const item = this.closest('.doc-accordion-item');
            item.classList.toggle('is-open');
        });
    });
</script>

<!-- TOC scroll highlighting -->
<script>
    const sections = document.querySelectorAll('.content-section');
    const tocLinks = document.querySelectorAll('.toc-list a');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                tocLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + entry.target.id) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }, { rootMargin: '-20% 0px -60% 0px' });

    sections.forEach(s => observer.observe(s));
</script>

<?php get_footer(); ?>
