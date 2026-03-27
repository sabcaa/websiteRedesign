<?php
/**
 * Template Name: Renewal
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Renewal',
    'subtitle' => 'Information about annual practice permit renewal for registered acupuncturists in Alberta.',
    'breadcrumbs' => array(
        'Home'        => '/',
        'Registrants' => '/registrants/',
    )
)); ?>

<div class="page-layout">

    <?php get_template_part( 'template-parts/sidebar-toc', null, array(
        'items' => array(
            'Overview'              => '#overview',
            'Renewal requirements'  => '#requirements',
            'Late renewal'          => '#late-renewal',
            'Renewal fee'           => '#fee',
            'Access documents'      => '#access-documents',
            'Cancel registration'   => '#cancel',
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

        <!-- OVERVIEW -->
        <section class="content-section" id="overview">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-id-card"></i></span>
                Overview
            </h2>
            <p>To practice as an acupuncturist in Alberta and use a protected title (acupuncturist, doctor of acupuncture, Dr. Ac., R. Ac., Ac.), you must be registered with the College of Acupuncturists of Alberta and have a valid practice permit. A valid practice permit must be displayed when providing acupuncture services as outlined in the <em>Health Professions Act</em> section 36(5).</p>
            <p>Practice permit renewal runs annually from <strong>February 1 to March 31</strong>.</p>

            <div class="callout-warning">
                <strong>Important:</strong> If renewal (including full payment) is not completed by March 31, the practice permit will be <strong>suspended on April 1</strong>. It is then illegal to practice acupuncture.
            </div>

            <div class="callout">
                Due to the high volume of inquiries the College receives during renewal, we recommend renewing early in case you need support.
            </div>

            <p>Practice permit renewal is mandatory for registrants on the General and Non-practicing Registers and must be completed through the <a href="<?php echo esc_url( get_field('urlmemberportal', 'option') ); ?>">Member Portal</a>.</p>

            <p>Refer to the College’s <a href="/wp-content/uploads/2023/08/R.1.2-Registration-Policy.pdf">Registration Policy</a> and associated procedure for further information.
        </section>

        <!-- RENEWAL REQUIREMENTS -->
        <section class="content-section" id="requirements">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-list-check"></i></span>
                Renewal requirements
            </h2>
            <p>Renewal is completed through the <a href="<?php echo esc_url( get_field('urlmemberportal', 'option') ); ?>">Member Portal</a>. All documents must be submitted through the portal. To complete renewal:</p>
            <ol>
                <li>Update your profile.</li>
                <li>Record <a href="/practice-hours/">practice hours</a>. Effective for the February 1, 2026, renewal, there is no longer a requirement for 600 direct practice hours in the past 3 years. <a href="/uncategorized/change-to-practice-hour-requirements-for-practice-permit-renewal/">Read announcement</a>.</li>
                <li>Submit a valid <a href="/professional-liability-insurance/">professional liability insurance</a> certificate.</li>
                <li>Complete <a href="/continuing-competence-program/">Continuing Competence Program</a> requirements:
                    <ol type="a">
                        <li>At least 15 CCP credits for the previous registration cycle, including mandatory College-directed learning if applicable.</li>
                        <li>At least one learning goal with a learning summary and reflection for the upcoming registration cycle.</li>
                    </ol>
                </li>
                <li>Submit a valid <a href="/first-aid-cpr/">standard first-aid and CPR-C</a> certificate.</li>
                <li>Pay the practice permit fee.</li>
            </ol>
            <div class="callout">
                You must complete and submit all of the above to successfully renew. For help, refer to the <a href="<?php echo esc_url( get_field('urlportalsupport', 'option') ); ?>">Member Portal Support page</a>.
            </div>
        </section>

        <!-- LATE RENEWAL -->
        <section class="content-section" id="late-renewal">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-triangle-exclamation"></i></span>
                Late renewal
            </h2>

            <h3>If renewal is not completed by March 31</h3>
            <div class="callout-warning">
                <ul style="margin: 0; padding-left: 20px;">
                    <li>Member registration is <strong>suspended as of April 1</strong></li>
                    <li>It is <strong>illegal for the member to practice</strong> acupuncture as of April 1</li>
                    <li>The member must pay a <strong><a href="/wp-content/uploads/2023/06/Fee-schedule_Feb20233.pdf">late fee as outlined in the fee schedule</a></strong></li>
                    <li>The member will receive a notice of intention to <strong>cancel their registration</strong> if renewal is not completed within 30 days</li>
                </ul>
            </div>

            <h3>If renewal is not completed by the date in the notice</h3>
            <div class="callout-warning">
                <ul style="margin: 0; padding-left: 20px;">
                    <li>Their practice permit is <strong>cancelled</strong></li>
                    <li>It is <strong>illegal</strong> for the member to practice acupuncture</li>
                    <li>The member must complete and submit a <a href="/applicants/applications/"><strong>Reinstatement Application</strong></a>, including the <a href="/wp-content/uploads/2023/06/Fee-schedule_Feb20233.pdf">application fee outlined in the fee schedule</a></li>
                    <li>The College will <strong>notify the member's employer</strong> of the cancellation of their permit</li>
                </ul>
            </div>
        </section>

        <!-- RENEWAL FEE -->
        <section class="content-section" id="fee">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-dollar-sign"></i></span>
                Renewal fee
            </h2>
            <p>The annual practice permit renewal fee is set out in <a href="/wp-content/uploads/2023/06/Fee-schedule_Feb20233.pdf">the College's fee schedule</a>. The fee can be paid by:</p>
            <ul>
                <li>Visa debit or credit card through the <a href="<?php echo esc_url( get_field('urlmemberportal', 'option') ); ?>">Member Portal</a></li>
                <li>E-transfer to <a href="mailto:payment@acupuncturealberta.ca">payment@acupuncturealberta.ca</a> — include your name, registration number, and "payment for renewal" in the message field</li>
            </ul>
        </section>

        <!-- ACCESS DOCUMENTS -->
        <section class="content-section" id="access-documents">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-file-circle-check"></i></span>
                Access practice permit and tax receipt
            </h2>
            <p>All documents, including a tax receipt and your practice permit, are available in the <a href="<?php echo esc_url( get_field('urlmemberportal', 'option') ); ?>">Member Portal</a> once renewal is complete and paid in full.</p>
        </section>

        <!-- CANCEL REGISTRATION -->
        <section class="content-section" id="cancel">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-circle-xmark"></i></span>
                Cancel registration
            </h2>
            <p>To cancel your registration, send a message to <a href="mailto:info@acupuncturealberta.ca">info@acupuncturealberta.ca</a>.</p>
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
