<?php
/**
 * Template Name: Applications
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Applications',
    'subtitle' => 'Everything you need to apply for registration with the College of Acupuncturists of Alberta.',
    'breadcrumbs' => array(
        'Home'       => '/',
        'Applicants' => '/applicants/',
    )
)); ?>

<div class="page-layout">

    <?php get_template_part( 'template-parts/sidebar-toc', null, array(
        'items' => array(
            'Registration guide'         => '#registration-guide',
            'How to apply'               => '#how-to-apply',
            'Fees'                       => '#fees',
            'Application requirements'   => '#requirements',
            'Timelines'                  => '#timelines',
            'New Alberta graduates'      => '#new-graduates',
            'Provisional applicants'     => '#provisional',
            'Provisional to general'     => '#provisional-to-general',
            'Non-practicing'             => '#non-practicing',
            'Return to practice'         => '#return-to-practice',
            'Reinstatement'              => '#reinstatement',
            'Canadian graduates'         => '#canadian-graduates',
            'Labour mobility'            => '#labour-mobility',
            'International graduates'    => '#international-graduates',
            'Courtesy registrants'       => '#courtesy',
        ),
        'cta_primary' => array(
            'label' => 'Member Portal',
            'url'   => 'https://caa.alinityapp.com/',
        ),
        'cta_secondary' => array(
            'label' => 'Portal support',
            'url'   => '/resources/member-portal-support/',
        ),
    )); ?>

    <main class="main-content">

        <!-- REGISTRATION GUIDE -->
        <section class="content-section" id="registration-guide">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-book-open"></i></span>
                Registration guide
            </h2>
            <p>For a comprehensive walkthrough of how to register with the College, read the registration guide.</p>
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Registration Guide',
                'url'   => 'https://www.acupuncturealberta.ca/wp-content/uploads/2025/10/Registration-Guide.pdf',
                'desc'  => 'A complete overview of the registration process.',
            )); ?>
        </section>

        <!-- HOW TO APPLY -->
        <section class="content-section" id="how-to-apply">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-paper-plane"></i></span>
                How to submit an application
            </h2>
            <p>All applications must be submitted on the <a href="https://caa.alinityapp.com/">Member Portal</a>. Refer to <a href="/resources/member-portal-support/">Member Portal Support</a> for help signing up and filling out application forms.</p>
            <p>Depending on your application type, you may also need to submit the following:</p>
            <ul>
                <li><a href="https://www.acupuncturealberta.ca/wp-content/uploads/2023/11/CAA-Letter-of-Standing-Fillable.pdf">Letter of standing</a> — if you are registered with other regulated health professions</li>
                <li><a href="https://www.acupuncturealberta.ca/wp-content/uploads/2023/01/Character-Reference-Form.pdf">Character and reputation reference form</a></li>
                <li><a href="https://caa-abuse-misconduct-course.netlify.app/">Sexual abuse and misconduct training</a></li>
            </ul>
        </section>

        <!-- FEES -->
        <section class="content-section" id="fees">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-dollar-sign"></i></span>
                Fees
            </h2>
            <p>Fees for each application type are listed in the College Fee Schedule, available under Governance Documents.</p>
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'College of Acupuncturists of Alberta Fee Schedule',
                'url'   => '/resources/governance-documents/',
                'desc'  => 'Find fees for all application and registration types.',
            )); ?>
        </section>

        <!-- APPLICATION REQUIREMENTS -->
        <section class="content-section" id="requirements">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-list-check"></i></span>
                Application requirements
            </h2>
            <p>Requirements vary by application type. The chart below outlines what is required for each.</p>
            <div style="overflow-x: auto;">
                <table class="caa-table">
                    <thead>
                        <tr>
                            <th>Requirement</th>
                            <th>New graduates</th>
                            <th>Internationally educated</th>
                            <th>Labour mobility</th>
                            <th>Reinstatement</th>
                            <th>Provisional</th>
                            <th>Courtesy (educational)</th>
                            <th>Courtesy (clinical)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Application</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td></tr>
                        <tr><td>Application fee</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td></tr>
                        <tr><td>Identification (2 pieces)</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td></tr>
                        <tr><td>Proof of citizenship or work permit</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td></tr>
                        <tr><td>Credentials of acupuncture education</td><td>✓</td><td>✓</td><td></td><td>✓</td><td>✓</td><td>✓</td><td>✓</td></tr>
                        <tr><td>Criminal &amp; vulnerable sector check</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td></td><td>✓</td></tr>
                        <tr><td>2 references</td><td>✓</td><td>✓</td><td></td><td>✓</td><td>✓</td><td></td><td>✓</td></tr>
                        <tr><td>First aid &amp; CPR</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td></td><td>✓</td></tr>
                        <tr><td>Sexual abuse &amp; misconduct training</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td></td><td>✓</td></tr>
                        <tr><td>Letter of standing</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td></td><td>✓</td></tr>
                        <tr><td>Professional liability insurance</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td></td><td>✓</td></tr>
                        <tr><td>Examinations</td><td>✓</td><td>✓</td><td></td><td>If applicable</td><td>✓</td><td></td><td></td></tr>
                        <tr><td>Currency of practice</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td></tr>
                        <tr><td>Fitness to practice</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td></tr>
                        <tr><td>English language requirements</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td><td>✓</td></tr>
                        <tr><td>Jurisprudence examination</td><td></td><td></td><td>✓</td><td>If applicable</td><td></td><td></td><td>✓</td></tr>
                        <tr><td>Education credential assessment</td><td>Outside AB only</td><td>✓</td><td></td><td></td><td></td><td>Outside AB only</td><td>Outside AB only</td></tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- TIMELINES -->
        <section class="content-section" id="timelines">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-clock"></i></span>
                Timelines
            </h2>
            <p>The College reviews all applications for completeness. If an application is not completed within <strong>3 months</strong> of the initial submission, it will be closed and a new application will be required.</p>
            <p>The College reaches a decision on complete applications within <strong>20 days</strong>. Once a decision is reached, the College notifies the applicant.</p>
            <p>If an application is approved, the College requires the applicant to pay the pro-rated registration fee. At that point, a practice permit is issued.</p>
            <div class="callout">
                For further information refer to the <a href="https://www.acupuncturealberta.ca/wp-content/uploads/2023/08/R.1.2-Registration-Policy.pdf">Registration Policy</a> and <a href="https://www.acupuncturealberta.ca/wp-content/uploads/2023/11/R.1.2.1-Registration-Procedure.pdf">Registration Procedure</a>.
            </div>
        </section>

        <!-- DIVIDER between general info and application types -->
        <div class="section-divider">
            <h2>Information by application type</h2>
            <p>Select your situation below to find the specific requirements, steps, and resources for your application.</p>
        </div>

        <!-- NEW ALBERTA GRADUATES -->
        <section class="content-section" id="new-graduates">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-graduation-cap"></i></span>
                New Alberta graduates
            </h2>
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'New Graduates Registration Requirements Checklist',
                'url'   => 'https://www.acupuncturealberta.ca/wp-content/uploads/2025/09/New-Grads-Registration-Requirements-Checklist.pdf',
            )); ?>
            <p>A new Alberta graduate must:</p>
            <ol>
                <li>Apply to take the <a href="/exams/">Alberta Acupuncturist Registration Examinations (AARE)</a> through the <a href="https://caa.alinityapp.com/">Member Portal</a>.</li>
                <li>Pass the AARE. These exams are offered twice a year.</li>
                <li>Submit a General Registration Application after passing the AARE.</li>
            </ol>
            <div class="callout">
                An <strong>official transcript</strong> AND a <strong>diploma</strong> from an approved acupuncture program is required for registration. If you are a current student who has passed the AARE and submitted a registration application, your application will not be reviewed until all documents are received.
            </div>
        </section>

        <!-- PROVISIONAL -->
        <section class="content-section" id="provisional">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-id-card"></i></span>
                Provisional applicants
            </h2>
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Provisional Registration Requirements Checklist',
                'url'   => 'https://www.acupuncturealberta.ca/wp-content/uploads/2025/09/Provisional-Registration-Requirements-Checklist.pdf',
            )); ?>
            <h3>Eligibility</h3>
            <p>You can apply to be a Provisional Registrant if, within the 3-year period preceding your application:</p>
            <ol>
                <li>You obtained a diploma from a Council-approved acupuncture program; AND</li>
                <li>You are not yet eligible to be a Registered Acupuncturist because you have not completed your exams; AND</li>
                <li>You are registered for the AARE.</li>
            </ol>
            <h3>How to apply</h3>
            <ol>
                <li>Submit a Provisional Registration Application.</li>
                <li>Submit a <a href="https://www.acupuncturealberta.ca/wp-content/uploads/2023/11/Supervision-Agreement-Form.pdf">Supervision Agreement Form</a>.</li>
            </ol>
            
            <?php get_template_part( 'template-parts/qa-block', null, array(
                'items' => array(
                    array(
                        'q' => 'How long is a Provisional Registration valid?',
                        'a' => 'A Provisional Registration is valid for one year. You have one year to complete your exams (unless extended by the Registrar) and become a member of the General Register.',
                    ),
                    array(
                        'q' => 'Can I practice acupuncture as a Provisional Registrant?',
                        'a' => 'A Provisional Registrant is able to practice acupuncture, but must do so with a supervisor.',
                    ),
                    array(
                        'q' => 'What else do I need to know about being a Provisional Registrant?',
                        'a' => 'You are responsible for finding a supervisor and must have a supervisor at all times while you are a Provisional Registrant.',
                    ),
                ),
            )); ?>
        </section>

        <!-- PROVISIONAL TO GENERAL -->
        <section class="content-section" id="provisional-to-general">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-arrow-up-right-dots"></i></span>
                Provisional to general
            </h2>
            <p>Provisional Applicants applying to be General Applicants must submit a Provisional to General Registration Application through the <a href="https://caa.alinityapp.com/">Member Portal</a>.</p>
        </section>

        <!-- NON-PRACTICING -->
        <section class="content-section" id="non-practicing">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-circle-pause"></i></span>
                Non-practicing applicants
            </h2>
            <h3>Eligibility</h3>
            <p>You can apply to be a Non-practicing Registrant if:</p>
            <ol>
                <li>You are a registrant on the General Register; AND</li>
                <li>You are current with all fees; AND</li>
                <li>You are not under investigation or awaiting a hearing or decision relating to a complaint; AND</li>
                <li>You are not subject to any restrictions or conditions on your practice permit.</li>
            </ol>
            <div class="callout-warning">
                <strong>Note:</strong> Currency-in-practice requirements must continue to be met once a non-practicing registrant returns to the general register. Regulated members who change to non-practicing status must complete any outstanding CCP requirements for the year they were last registered and all mandatory College-directed activities during the non-practicing period before returning to the General Register.
            </div>
            <h3>How to apply</h3>
            <p>Submit a Non-practicing Application through the <a href="https://caa.alinityapp.com/">Member Portal</a>.</p>
         
            <?php get_template_part( 'template-parts/qa-block', null, array(
                'items' => array(
                    array(
                        'q' => 'Under what circumstances should I submit a non-practicing application?',
                        'a' => 'There may be times in your career that you choose to take a break from your practice, such as parental leave, travel, or illness. The College provides the opportunity to apply to become a non-practicing member for a period of no more than two years.',
                    ),
                    array(
                        'q' => 'What is considered a non-practicing year?',
                        'a' => 'If you change your status to non-practicing at any point during the registration year, the entire year is considered your first non-practicing year and you can only remain non-practicing for one more registration year. Changing your status during the renewal period (February 1–March 31) will allow you to stay on the non-practicing register for a full two years.',
                    ),
                    array(
                        'q' => 'What is the effect on renewal fees if I am a non-practicing registrant?',
                        'a' => 'Applying to be on the non-practicing register greatly reduces your yearly renewal fee. Refer to the fee schedule for details.',
                    ),
                ),
            )); ?>
        </section>

        <!-- RETURN TO PRACTICE -->
        <section class="content-section" id="return-to-practice">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-rotate-right"></i></span>
                Return to practice
            </h2>
            <p>Applicants who have been on the Non-practicing Register for less than two years and wish to return to the General Register must submit a Return to Practice Application through the <a href="https://caa.alinityapp.com/">Member Portal</a>.</p>
            <div class="callout-warning">
                <strong>Note:</strong> Regulated members who changed to non-practicing status must complete any outstanding CCP requirements for the year they were last registered and all mandatory College-directed activities during the non-practicing period before returning to the General Register.
            </div>
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Registration Procedure',
                'url'   => 'https://www.acupuncturealberta.ca/wp-content/uploads/2023/11/R.1.2.1-Registration-Procedure.pdf',
                'desc'  => 'Under Regulatory Policies.',
            )); ?>
        </section>

        <!-- REINSTATEMENT -->
        <section class="content-section" id="reinstatement">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-arrows-rotate"></i></span>
                Reinstatement
            </h2>
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Reinstatement Registration Requirements Checklist',
                'url'   => 'https://www.acupuncturealberta.ca/wp-content/uploads/2025/11/Reinstatement-Registration-Requirements-Checklist.pdf',
            )); ?>
            <p>Applicants who have had their practice permit cancelled must submit a Reinstatement Application.</p>
            <h3>Requirements to reinstate</h3>
            <table class="caa-table">
                <thead>
                    <tr>
                        <th>Unregistered timeframe</th>
                        <th>Requirements</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Less than 2 years</td>
                        <td>Complete any outstanding CCP requirements for the last year of registration.</td>
                    </tr>
                    <tr>
                        <td>2 to less than 5 years</td>
                        <td>Pass the jurisprudence examination. Obtain 15 CCP credits from a formal program. Complete all mandatory College-directed activities during unregistered years.</td>
                    </tr>
                    <tr>
                        <td>5 to 10 years</td>
                        <td>Pass the jurisprudence examination and safety module. Obtain 30 CCP credits from a formal program. Complete all mandatory College-directed activities for the past five years.</td>
                    </tr>
                    <tr>
                        <td>More than 10 years</td>
                        <td>Pass all components of the AARE. Complete supervised patient treatments as follows:
                            <br>
                            <ul>
                                <li>5 years or less of previous experience: 40 supervised patient treatments</li>	
                                <li>5–10 years of previous experience: 30 supervised patient treatments	</li>	
                                <li>10 years or more of previous experience: 20 supervised patient treatments</li>	
                            </ul>
                        </td>

                    </tr>
                </tbody>
            </table>
            <div class="callout-warning">
                Only credits earned through <strong>formal</strong> programs (courses, seminars, workshops) that align with the Alberta Competency Standard will be accepted. Alternate practice experience may be considered at the discretion of the Registrar.
            </div>
        </section>

        <!-- CANADIAN GRADUATES -->
        <section class="content-section" id="canadian-graduates">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-map-location-dot"></i></span>
                Canadian graduates outside Alberta
            </h2>
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Canadian-Educated Applicants Registration Checklist',
                'url'   => 'https://www.acupuncturealberta.ca/wp-content/uploads/2025/09/Canadian-Educated-Registration-Requirements-Checklist.pdf',
            )); ?>
            <h3>Not registered in another jurisdiction</h3>
            <ol>
                <li>Register for the <a href="/exams/">Alberta Acupuncturist Registration Examinations (AARE)</a>.</li>
                <li>Pass the AARE. These exams are offered twice a year. Exam results are valid for three years.</li>
                <li>Submit a General Registration Application after passing the AARE.</li>
            </ol>
        </section>

        <!-- LABOUR MOBILITY -->
        <section class="content-section" id="labour-mobility">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-right-left"></i></span>
                Labour mobility
            </h2>
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Labour Mobility Registration Checklist',
                'url'   => 'https://www.acupuncturealberta.ca/wp-content/uploads/2025/09/LMA-Registration-Requirements-Checklist.pdf',
            )); ?>
            <p>If you are a current registrant in BC, Newfoundland, Ontario, or Quebec, you can apply for registration in Alberta under Alberta's <a href="https://www.alberta.ca/removing-barriers-to-labour-mobility.aspx">Labour Mobility Act (LMA)</a>.</p>
            <ol>
                <li>Submit an LMA Registration Application.</li>
                <li>After evaluation and approval, pay a pro-rated registration fee based on the quarter you are registering in. The College's registration cycle is April 1–March 31.</li>
            </ol>
           
            <?php get_template_part( 'template-parts/qa-block', null, array(
                'items' => array(
                    array(
                        'q' => 'What documents are required for an LMA Application?',
                        'a' => '<p>A brief summary of requirements:</p><ul>
                            <li>A completed LMA Application</li>
                            <li>2 pieces of identification</li>
                            <li>Proof of Canadian citizenship or a work permit</li>
                            <li>Sexual abuse and sexual misconduct training</li>
                            <li>First aid and CPR certification</li>
                            <li>English language proficiency</li>
                            <li>Letter of standing from current regulatory authority</li>
                            <li>A criminal record and vulnerable sector check</li>
                            <li>A non-refundable fee of $300</li>
                        </ul>',
                    ),
                ),
            )); ?>
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Acupuncturists Profession Regulation',
                'url'   => 'https://open.alberta.ca/publications/2020_255',
                'desc'  => 'Alberta legislation governing the acupuncture profession.',
            )); ?>
        </section>

        <!-- INTERNATIONAL GRADUATES -->
        <section class="content-section" id="international-graduates">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-globe"></i></span>
                International graduates
            </h2>
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Internationally Educated Applicants Registration Checklist',
                'url'   => 'https://www.acupuncturealberta.ca/wp-content/uploads/2025/09/Internationally-Educated-Registration-Requirements-Checklist.pdf',
            )); ?>
            <ol>
                <li>Register for and pass the <a href="/exams/">AARE</a>. Offered twice a year; results valid for three years.</li>
                <li>Upload an Educational Credential Assessment with your examination application.</li>
                <li>Submit a General Registration Application after passing the AARE.</li>
            </ol>
            
            <?php get_template_part( 'template-parts/qa-block', null, array(
                'items' => array(
                    array(
                        'q' => 'Why is an educational credential  assessment required?',
                        'a' => 'The assessment report ensures your education credentials are authentic and verifiable, and allows the College to compare your credentials to the Alberta equivalent.',
                    ),
                    array(
                        'q' => 'Where does the College accept educational credential assessments from?',
                        'a' => 'You must obtain your assessment from a <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/documents/education-assessed/how.html" target="_blank" rel="noopener noreferrer">designated organization listed on the Government of Canada website</a>.',
                    ),
                    array(
                        'q' => 'Which types of educational credential assessments does the College accept?',
                        'a' => '<ul><li>A basic assessment</li><li>A document-by-document evaluation</li></ul>',
                    ),
                    array(
                        'q' => 'Where do I send the educational credential assessment?',
                        'a' => 'The completed assessment can be forwarded directly to the College from the assessment service organization, or uploaded to your online exam application.',
                    ),
                    array(
                        'q' => 'Who pays for the educational credential assessment?',
                        'a' => 'Any costs associated with obtaining the required assessment results are the responsibility of the applicant.',
                    ),
                ),
            )); ?>
        </section>

        <!-- COURTESY -->
        <section class="content-section" id="courtesy">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-handshake"></i></span>
                Courtesy registrants
            </h2>
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Courtesy Registration Requirements Checklist',
                'url'   => 'https://www.acupuncturealberta.ca/wp-content/uploads/2025/09/Courtesy-Registration-Requirements-Checklist.pdf',
            )); ?>
            <h3>Eligibility</h3>
            <p>You can apply to be a Courtesy Registrant if:</p>
            <ol>
                <li>You are an acupuncturist in good standing in another jurisdiction with substantially equivalent competencies; AND</li>
                <li>Your registration is on a temporary basis and for a specified purpose; AND</li>
                <li>Your registration on the Courtesy Register will not exceed 6 months.</li>
            </ol>
            <h3>How to apply</h3>
            <ol>
                <li>Submit a Courtesy Register Application.</li>
                <li>Remain registered and in good standing in your other jurisdiction while on the Courtesy Register.</li>
            </ol>
            <div class="callout-warning">
                <strong>Important:</strong> If the member's registration is suspended or cancelled in the other jurisdiction, the courtesy registration is immediately cancelled within Alberta.
            </div>
        </section>

    </main>
</div>

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
