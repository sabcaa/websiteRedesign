<?php
/**
 * Template Name: Content with Sidebar TOC
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Submit a Complaint',
    'subtitle' => 'The College investigates complaints about registered acupuncturists in Alberta to protect the public.',
    'breadcrumbs' => array(
        'Home'       => '/',
        'Complaints' => '/complaint-process/',
    )
)); ?>

<div class="page-layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <nav class="toc-box" aria-label="On this page">
            <div class="toc-header">On this page</div>
            <ul class="toc-list">
                <li><a href="#what-is-unprofessional-conduct">Unprofessional conduct</a></li>
                <li><a href="#can-we-investigate">What we can investigate</a></li>
                <li><a href="#what-outcome">What outcome to expect</a></li>
                <li><a href="#process">The complaint process</a></li>
                <li><a href="#hearings">Hearings</a></li>
                <li><a href="#appeals">Appeals</a></li>
                <li><a href="#ombudsman">Alberta Ombudsman</a></li>
                <li><a href="#submit">Submit a complaint</a></li>
            </ul>
        </nav>
        <div class="toc-cta">
            <a href="#submit" class="btn btn-primary">Submit a complaint</a>
            <a href="/contact-us/" class="btn btn-secondary">Contact us first</a>
        </div>
    </aside>

    <!-- MOBILE TOC -->
    <details class="mobile-toc">
        <summary>On this page</summary>
        <ul>
            <li><a href="#what-is-unprofessional-conduct">Unprofessional conduct</a></li>
            <li><a href="#can-we-investigate">What we can investigate</a></li>
            <li><a href="#what-outcome">What outcome to expect</a></li>
            <li><a href="#process">The complaint process</a></li>
            <li><a href="#hearings">Hearings</a></li>
            <li><a href="#appeals">Appeals</a></li>
            <li><a href="#ombudsman">Alberta Ombudsman</a></li>
            <li><a href="#submit">Submit a complaint</a></li>
        </ul>
    </details>

    <!-- MAIN CONTENT -->
    <main class="main-content">

        <!-- UNPROFESSIONAL CONDUCT -->
        <section class="content-section" id="what-is-unprofessional-conduct">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-scale-balanced"></i></span>
                What is unprofessional conduct?
            </h2>
            <p>As the regulatory body for acupuncturists in Alberta, the College investigates complaints about registered acupuncturists. Complaints must relate to unprofessional conduct. For more detail, refer to the College's <a href="/wp-content/uploads/2024/01/R.1.4-Complaints-Management-Policy-1.pdf">Complaint Management Policy</a>.</p>
            <p>Unprofessional conduct is defined in the <em>Health Professions Act</em> as:</p>
            <ul>
                <li>A lack of skill, knowledge, or judgment in the provision of professional services</li>
                <li>A contravention of legislation, professional standards, or Code of Conduct</li>
                <li>Acts of non-compliance with specific member requirements imposed by the College</li>
            </ul>
            <div class="callout">
                <strong>Note:</strong> The College does not investigate complaints that are not related to a member's professional practice.
            </div>
        </section>

        <!-- CAN / CANNOT -->
        <section class="content-section" id="can-we-investigate">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                What we can and cannot investigate
            </h2>
            <div class="info-grid">
                <div class="info-box can">
                    <div class="info-box-title">
                        <span class="dot"></span>
                        We can investigate
                    </div>
                    <ul>
                        <li>Lack of skill or knowledge in patient care</li>
                        <li>Breaches of professional standards or Code of Conduct</li>
                        <li>Unprofessional language or behaviour</li>
                        <li>Non-compliance with College requirements</li>
                        <li>Contravention of legislation</li>
                    </ul>
                </div>
                <div class="info-box cannot">
                    <div class="info-box-title">
                        <span class="dot"></span>
                        We cannot investigate
                    </div>
                    <ul>
                        <li>Complaints unrelated to professional practice</li>
                        <li>Requests for financial compensation</li>
                        <li>Concerns about other health professions</li>
                        <li>General dissatisfaction not tied to conduct</li>
                    </ul>
                </div>
            </div>
            <div class="callout" style="margin-top:16px;">
                <strong>Before filing:</strong> Consider speaking directly with the acupuncturist or their employer first. If unresolved or you are not comfortable doing so, contact the College.
            </div>
        </section>

        <!-- WHAT OUTCOME -->
        <section class="content-section" id="what-outcome">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-clipboard-list"></i></span>
                What outcome can I expect?
            </h2>
            <p>The College's role is the <strong>protection of the public</strong>. If a member's professional actions are of concern, our objective is to remediate the situation and improve practice — not to award compensation.</p>
            <p>Remediation may include sanctions such as education, supervision, or financial penalties. In more serious situations, a suspension or cancellation of the member's practice permit may occur.</p>
        </section>

        <!-- THE PROCESS -->
        <section class="content-section" id="process">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-folder-open"></i></span>
                The complaint process
            </h2>
            <p>When a complaint is received, the Complaints Director reviews it and has three options:</p>

            <div class="outcome-cards">
                <div class="outcome-card">
                    <h4>Dismissal</h4>
                    <p>Complaint is dismissed if there is likely insufficient evidence, or if the College does not have authority to investigate.</p>
                </div>
                <div class="outcome-card">
                    <h4>Resolution</h4>
                    <p>An informal resolution process is attempted between the complainant and the member, tailored to the situation.</p>
                </div>
                <div class="outcome-card">
                    <h4>Investigation</h4>
                    <p>A formal investigation is commenced to gather information and give the member opportunity to respond.</p>
                </div>
            </div>

            <h3>If the complaint is dismissed</h3>
            <p>You may request a review within <strong>30 days</strong>, in writing, with reasons. A Complaint Review Committee (CRC) will either confirm the dismissal or refer the complaint for investigation. The CRC decision is not further appealable.</p>

            <h3>If an investigation proceeds</h3>
            <p>The Complaints Director may conduct the investigation or retain an investigator. The purpose is to gather information, allow the member to respond, and produce an investigation report.</p>
            <p>After reviewing the report, the Complaints Director may:</p>
            <ul>
                <li>Request additional information</li>
                <li>Dismiss the complaint (with same review options as above)</li>
                <li>Refer the complaint to a formal hearing</li>
            </ul>
        </section>

        <!-- HEARINGS -->
        <section class="content-section" id="hearings">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-gavel"></i></span>
                Hearings
            </h2>
            <p>If referred to a hearing, the complainant's role is as a <strong>witness only</strong>. The hearing is a matter between the College and the member.</p>
            <p>Hearings are often held virtually. The hearing tribunal — made up of professional and public members — determines:</p>
            <ol>
                <li>Whether the allegations have been proven</li>
                <li>Whether the allegations constitute unprofessional conduct</li>
                <li>If unprofessional conduct occurred, the appropriate remediation to protect the public</li>
            </ol>
            <div class="callout">
                Once a hearing date is set, a <a href="/upcoming-hearings/">notification is posted on the College website</a> including the member's name, permit number, allegations, and hearing date.
            </div>
            <p>Findings of unprofessional conduct are posted following the appeal period and remain for 5 years or until all conditions are complied with, whichever is later.</p>
            <p>Refer to the <a href="/wp-content/uploads/2025/06/Hearings-Handbook.pdf">Hearings Handbook</a> for a full overview of the process.</p>
        </section>

        <!-- APPEALS -->
        <section class="content-section" id="appeals">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-rotate-left"></i></span>
                Appeals
            </h2>
            <p>The decision of the hearing tribunal may be appealed by either the member or the College. The appeal is heard by an appeals committee, whose decision is further appealable to the <strong>Alberta Court of Appeal</strong>.</p>
        </section>

        <!-- OMBUDSMAN -->
        <section class="content-section" id="ombudsman">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-bullhorn"></i></span>
                Alberta Ombudsman
            </h2>
            <p>The complainant or the member may make a complaint to the Alberta Ombudsman if they believe the College's management of the complaint was administratively unfair.</p>
            <p>The Ombudsman will require that all legislative options, such as appeals, be concluded first.</p>
        </section>

        <!-- SUBMIT CTA -->
        <div class="cta-section" id="submit">
            <div>
                <h2>Ready to submit a complaint?</h2>
                <p>Complete the online complaints form. Information collected is used under the authority of the <em>Health Professions Act</em>.</p>
            </div>
            <a href="https://form.jotform.com/251265458465060" class="cta-btn">Submit a complaint →</a>
        </div>

    </main>
</div>

<!-- TOC scroll highlighting -->
<script>
    const sections = document.querySelectorAll('.content-section, .cta-section');
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
