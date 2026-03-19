<?php
/**
 * Template Name: Continuing Competence Program
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Continuing Competence Program',
    'subtitle' => 'Requirements and resources for the annual CCP cycle for registered acupuncturists in Alberta.',
    'breadcrumbs' => array(
        'Home'        => '/',
        'Registrants' => '/registrants/',
    )
)); ?>

<div class="page-layout">

    <?php get_template_part( 'template-parts/sidebar-toc', null, array(
        'items' => array(
            'What is CCP'                        => '#what-is-ccp',
            'Who participates'                   => '#who-participates',
            'Requirements'                       => '#requirements',
            'Mandatory College-directed activities' => '#mandatory-activities',
            'Eligible topics'                    => '#eligible-topics',
            'Earning CCP credits'                => '#earning-credits',
            'Resources'                          => '#resources',
            'FAQ'                                => '#faq',
        ),
        'cta_primary' => array(
            'label' => 'Member Portal',
            'url'   => esc_url( get_field('urlmemberportal', 'option') ),
        ),
        'cta_secondary' => array(
            'label' => 'Portal support',
            'url'   => esc_url( get_field('urlportalsupport', 'option') ),
        ),
    )); ?>

    <main class="main-content">

        <!-- WHAT IS CCP -->
        <section class="content-section" id="what-is-ccp">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-circle-info"></i></span>
                What is CCP?
            </h2>
            <p>All regulated health professions in Alberta are required to establish a Continuing Competence Program (CCP) through the <em>Health Professions Act</em>. The College built a flexible program that allows regulated members to set their own goals for professional development.</p>
            <p>The CCP has the following benefits:</p>
            <ul>
                <li>Regulated members can assess their own performance and maintain their competence</li>
                <li>A high level of expertise, competence, and professional ethics is maintained throughout the profession</li>
                <li>The public can trust that acupuncturists are committed to ongoing professional development</li>
                <li>The College fulfils its responsibility to protect the public good by ensuring acupuncturists adapt to a changing health care environment</li>
                <li>The College has a responsible, accountable, and formal system to assess and report on the continuing competence of its members, as required by legislation.</li>
            </ul>

            <h3>Types of CCP activities</h3>
            <p>There are two types of CCP learning activities:</p>

            <div class="callout">
                <strong>Self-selected:</strong> Any learning activity chosen by the acupuncturist, including formal programs. These must relate to the eight competencies identified in the Alberta Competency Standard for Acupuncturists.
            </div>
            <div class="callout" style="margin-top: 8px;">
                <strong>College-directed:</strong> Learning activities may be assigned by the College each year, related to a specific topic based on the College's mandate to serve the public interest. Topics vary year to year.
            </div>
        </section>

        <!-- WHO PARTICIPATES -->
        <section class="content-section" id="who-participates">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-users"></i></span>
                Who participates in CCP?
            </h2>
            <p>Participation in the CCP is <strong>mandatory</strong> for registrants on the general and provisional registers. Meeting all CCP requirements is necessary for annual practice permit renewal.</p>
            <p>Registrants on the courtesy or non-practicing registers are not required to meet CCP requirements.</p>
            <div class="callout-warning">
                <strong>Important:</strong> A registrant's practice permit may be suspended for the upcoming registration year if CCP requirements are not completed and submitted by <strong>March 31</strong>.
            </div>
            <p>All CCP documentation is submitted online via the <a href="<?php echo esc_url( get_field('urlmemberportal', 'option') ); ?>">Member Portal</a>.</p>
        </section>

        <!-- REQUIREMENTS -->
        <section class="content-section" id="requirements">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-list-check"></i></span>
                Requirements
            </h2>
            <p>A CCP cycle runs from <strong>April 1 to March 31</strong> of the following year. For each 12-month cycle, a regulated member on the general or provisional register must meet all requirements.</p>

            <div class="credit-summary">
                <div class="credit-summary-item">
                    <div class="credit-summary-number">1–10</div>
                    <div class="credit-summary-label">Learning goals identified before the cycle starts</div>
                </div>
                <div class="credit-summary-item">
                    <div class="credit-summary-number">15</div>
                    <div class="credit-summary-label">Minimum CCP credits of learning activities required</div>
                </div>
                <div class="credit-summary-item">
                    <div class="credit-summary-number">5 yrs</div>
                    <div class="credit-summary-label">Supporting documents must be kept after the cycle ends</div>
                </div>
            </div>

            <p>A registrant must:</p>
            <ol>
                <li>Identify at least 1 learning goal (maximum 10) prior to the start of a CCP cycle.</li>
                <li>Complete and report a minimum of 15 CCP credits of learning activities, including self-selected activities and any mandatory College-directed activities.</li>
                <li>Complete a learning reflection for each learning goal.</li>
                <li>Keep supporting documents for at least 5 years after the end of the CCP cycle.</li>
            </ol>

            <h3>Pro-rated credits for new registrants</h3>
            <p>If you have been registered with the College for less than a year, CCP credit requirements are pro-rated as follows:</p>
            <table class="prorated-table">
                <thead>
                    <tr>
                        <th>Registration period</th>
                        <th>Credits required</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>April, May, or June</td><td>15 credits</td></tr>
                    <tr><td>July, August, or September</td><td>10 credits</td></tr>
                    <tr><td>October, November, or December</td><td>5 credits</td></tr>
                    <tr><td>January, February, or March</td><td>1 credit</td></tr>
                </tbody>
            </table>

            <div class="callout">
                For more detailed information on CCP requirements, refer to the <a href="<?php echo esc_url( get_field('doccpppolicy') ); ?>">Continuing Competence Program Policy</a>.
            </div>
        </section>

        <!-- MANDATORY ACTIVITIES -->
        <section class="content-section" id="mandatory-activities">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-graduation-cap"></i></span>
                Mandatory College-directed activities
            </h2>
            <p>Each year the College may require completion of mandatory learning activities related to a specific topic. Topics are assigned based on the College's mandate to serve the public interest and vary year to year.</p>

            <?php
            // Mandatory activities repeater field
            if ( have_rows('ccpmandatoryactivities') ) : ?>
                <table class="mandatory-activities-table">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Mandatory activity</th>
                            <th>Time estimate</th>
                            <th>CCP credits</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ( have_rows('ccpmandatoryactivities') ) : the_row(); ?>
                            <tr>
                                <td><?php echo esc_html( get_sub_field('activityyear') ); ?></td>
                                <td>
                                    <?php if ( get_sub_field('activityurl') ) : ?>
                                        <a href="<?php echo esc_url( get_sub_field('activityurl') ); ?>" target="_blank" rel="noopener noreferrer">
                                            <?php echo esc_html( get_sub_field('activityname') ); ?>
                                        </a>
                                    <?php else : ?>
                                        <?php echo esc_html( get_sub_field('activityname') ); ?>
                                    <?php endif; ?>
                                    <?php if ( get_sub_field('activitynote') ) : ?>
                                        <span class="activity-note"><?php echo esc_html( get_sub_field('activitynote') ); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo esc_html( get_sub_field('activitytime') ); ?></td>
                                <td><?php echo esc_html( get_sub_field('activitycredits') ); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <div class="callout">
                    <strong>Note:</strong> Mandatory College-directed activities for the current cycle will be posted here in April.
                </div>
            <?php endif; ?>

            <div class="callout-warning">
                <strong>Credits do not carry forward.</strong> CCP credits completed in one cycle cannot be carried forward to the following cycle.
            </div>
        </section>

        <!-- ELIGIBLE TOPICS -->
        <section class="content-section" id="eligible-topics">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-bullseye"></i></span>
                Eligible topics
            </h2>
            <p>To be eligible for CCP credit, a self-selected learning activity must address one of the 8 competencies identified in the <a href="<?php echo esc_url( get_field('doccompetencystandard') ); ?>">Alberta Competency Standard for Acupuncturists</a>. The topics below are provided as a quick reference — this is not an exhaustive list.</p>

            <?php get_template_part( 'template-parts/competency-grid' ); ?>

            <div class="callout" style="margin-top: 8px;">
                A topic not on this list may still be eligible if it addresses a competency in the <a href="<?php echo esc_url( get_field('doccompetencystandard') ); ?>">Alberta Competency Standard for Acupuncturists</a>. Contact the College if you have questions about eligibility.
            </div>
        </section>

        <!-- EARNING CCP CREDITS -->
        <section class="content-section" id="earning-credits">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-star"></i></span>
                Earning CCP credits
            </h2>
            <p>Every <strong>1 hour of meaningful learning</strong> is equal to 1 CCP credit.</p>

             <div class="info-grid">
                <div class="info-box can">
                    <div class="info-box-title">
                        <span class="dot"></span>
                        Acceptable learning activities
                    </div>
                
                    <ul>
                        <li><strong>Formal programs:</strong> online or in-person courses, seminars, workshops, presentations, lectures, conferences</li>
                        <li><strong>Self-directed studies:</strong> reading books, journals, websites</li>
                        <li><strong>Structured interactive activities:</strong> participation in study groups, peer review</li>
                    </ul>
                </div>
                   <div class="info-box can">
                    <div class="info-box-title">
                        <span class="dot"></span>
                        Acceptable supporting documents
                    </div>

                    <ul>
                        <li><strong>Formal programs:</strong> certificate of completion, receipt, course materials, attendance record, or screenshot of presentation slides</li>
                        <li><strong>Self-directed studies:</strong> screenshot of website, picture of book cover, copy of journal article, or learning notes</li>
                        <li><strong>Structured interactive activities:</strong> study material, presentation slides, or study/review notes</li>
                    </ul>
                </div>
            </div>
            <div class="callout-warning">
                <strong>Herbology-only courses are not accepted</strong> for CCP credits.
            </div>
            <div class="callout-warning" style="margin-top: 8px;">
                <strong>First aid and CPR are not part of the CCP program.</strong> Do not claim First Aid/CPR for CCP credits — doing so will put your practice permit renewal and ability to practice at risk.
            </div>

            <h3>Pre-approved or accredited courses</h3>
            <p>The College <strong>does not</strong> pre-approve or accredit courses for CCP. Any provider offering courses while using the College's name and logo is not endorsed, and there is no guarantee the course is acceptable.</p>
            <div class="callout-warning">
                <strong>The College does not:</strong>
                <ul style="margin-top: 8px; margin-bottom: 0;">
                    <li>Partner with any organization that offers education courses</li>
                    <li>Permit any website offering education courses to use our name or logo</li>
                    <li>Pre-approve or accredit courses</li>
                </ul>
                If you see a website using our logo, please report it to <a href="mailto:info@acupuncturealberta.ca">info@acupuncturealberta.ca</a>.
            </div>

            <h3>Submitting your CCP form</h3>
            <p>To meet CCP requirements, registrants must submit a complete CCP form via the <a href="<?php echo esc_url( get_field('urlmemberportal', 'option') ); ?>">Member Portal</a>. For instructions and an example of a completed form, visit the <a href="<?php echo esc_url( get_field('urlportalsupport', 'option') ); ?>">Member Portal Support page</a>.</p>
        </section>

        <!-- RESOURCES -->
        <section class="content-section" id="resources">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-folder-open"></i></span>
                Resources
            </h2>
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Continuing Competence Program Policy',
                'url'   => esc_url( get_field('doccpppolicy') ),
            )); ?>
          
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'Alberta Competency Standard for Acupuncturists',
                'url'   => esc_url( get_field('doccompetencystandard') ),
            )); ?>
        </section>

        <!-- FAQ -->
        <section class="content-section" id="faq">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-circle-question"></i></span>
                Frequently asked questions
            </h2>
            <?php get_template_part( 'template-parts/qa-block', null, array(
                'items' => array(
                    array(
                        'q' => 'What time period do CCP activities cover?',
                        'a' => 'The CCP includes activities that take place between April 1 and March 31 of the following year.',
                    ),
                    array(
                        'q' => 'Will the CCP always require 15 credits per year?',
                        'a' => 'Yes.',
                    ),
                    array(
                        'q' => 'Can I carry extra credits forward to next year?',
                        'a' => 'No. Policy states that you cannot carry credits forward from year to year. The purpose of a continuing competence program is that members engage in professional development every year.',
                    ),
                    array(
                        'q' => 'Are all reflections and learning summaries limited to 750 characters?',
                        'a' => 'Yes, text should not exceed 750 characters (approximately 100 words) in all text boxes.',
                    ),
                    array(
                        'q' => 'Can I only submit when I\'ve completed all requirements?',
                        'a' => 'Yes, the system will not allow you to submit if requirements have not been met. You can use the Save for Later button to save your progress prior to being ready for submission.',
                    ),
                    array(
                        'q' => 'If I take a 2-day course with 7 hours each day, does it count as 14 hours?',
                        'a' => 'Yes, if you take a 2-day course and each day has 7 hours of learning, it counts as 14 hours.',
                    ),
                    array(
                        'q' => 'Can I claim self-study like reading acupuncture books?',
                        'a' => 'Yes, reading books related to acupuncture is considered self-directed study.',
                    ),
                    array(
                        'q' => 'Can I claim time spent reviewing the latest research on acupuncture techniques?',
                        'a' => 'Yes, time spent reviewing the latest research on acupuncture techniques can be used towards CCP credits.',
                    ),
                    array(
                        'q' => 'Does participation in study groups count for CCP credits?',
                        'a' => 'Yes, participation in study groups can count towards CCP credits. Please check the Continuing Competence Procedure for specifics regarding which activities can be used and what supporting documents are required.',
                    ),
                    array(
                        'q' => 'If I take a course that spans more than one year, can I use it across multiple cycles?',
                        'a' => 'Yes, if a program is more than one year, you can break it down into sections and record the learning activities as you complete them. You must set a goal for each year and complete a learning summary and reflection for that goal.',
                    ),
                    array(
                        'q' => 'Can I claim teaching hours for CCP credits?',
                        'a' => 'No, teaching hours cannot be used towards CCP credits.',
                    ),
                    array(
                        'q' => 'Can I claim CCP credits for topics outside the practice of acupuncture?',
                        'a' => 'No. Your learning must enable you to maintain or enhance competency as an acupuncturist. For example, an aromatherapy course that explains chemical properties of essential oils does not count. You may be able to earn credits for a course that closely integrates acupuncture theories with aromatherapy. Contact the College if you have questions about eligibility.',
                    ),
                    array(
                        'q' => 'Can goals remain the same from year to year?',
                        'a' => 'Yes, in certain circumstances the direction of your goal can remain the same across multiple years. However, the specifics of the goal, learning summary, reflection, and activity should all be different. The purpose of the CCP is to be learning something new each year.',
                    ),
                    array(
                        'q' => 'Can multiple people use the same goal and learning summary?',
                        'a' => 'No. Each individual is required to determine their own goal and reflect on their own learning. The intent of the CCP is for each member to continue to learn throughout their profession.',
                    ),
                    array(
                        'q' => 'What supporting documents can I use if courses were not purchased individually?',
                        'a' => 'There are various supporting documents the College will accept, including study notes, a screenshot of the course, and course materials provided to you. More information can be found in Appendix A of the Continuing Competence Procedure.',
                    ),
                    array(
                        'q' => 'Where can I find information on College-directed activities for the current CCP cycle?',
                        'a' => 'Information on College-directed activities for the current cycle is posted on this page. Information is made available on April 1 of each registration year.',
                    ),
                    array(
                        'q' => 'Does the College provide CCP lecture or learning activities?',
                        'a' => 'No, the College does not provide CCP lecture or learning activities. College-directed means course topics chosen by the College that you source and complete yourself.',
                    ),
                ),
            )); ?>

            <div class="callout" style="margin-top: 16px;">
                <strong>Still have questions?</strong> Contact the College at <a href="mailto:info@acupuncturealberta.ca">info@acupuncturealberta.ca</a>, 780-466-7787, or join our <a href="https://www.facebook.com/profile.php?id=100077677595643" target="_blank" rel="noopener noreferrer">Facebook community</a>.
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
