<?php
/**
 * Template Name: Fees Explained
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Fees Explained',
    'subtitle' => 'Information about how the College sets its fees and what your fees fund.',
    'breadcrumbs' => array(
        'Home'        => '/',
        'Registrants' => '/registrants/',
    )
)); ?>

<div class="page-layout">

    <?php get_template_part( 'template-parts/sidebar-toc', null, array(
        'items' => array(
            'Overview'                        => '#overview',
            'How fees are set'                => '#how-fees-are-set',
            'The 2022 fee increase'           => '#fee-increase',
            'How you can help keep fees low'  => '#keep-fees-low',
            'Financial transparency'          => '#financial-transparency',
            'Insurance and association costs' => '#insurance-association',
        ),
    )); ?>

    <main class="main-content">

        <!-- OVERVIEW -->
        <section class="content-section" id="overview">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-dollar-sign"></i></span>
                Overview
            </h2>
            <p>Pursuant to the <em>Health Professions Act</em>, the College is funded through membership fees.</p>
            <?php get_template_part( 'template-parts/resource-download', null, array(
                'title' => 'College Fee Schedule',
                'url'   => '/wp-content/uploads/2023/06/Fee-schedule_Feb20233.pdf',
                'desc'  => 'The most up-to-date information about registration fees and applicable late fees.',
            )); ?>
        </section>

        <!-- HOW FEES ARE SET -->
        <section class="content-section" id="how-fees-are-set">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-scale-balanced"></i></span>
                How fees are set
            </h2>
            <p>There are many factors that determine a regulatory body's fees. </p>

            <h3>Number of regulated members</h3>
            <p>All colleges have the same regulatory obligations, regardless of their size. This means the College of Acupuncturists of Alberta has the same expectations and requirements as colleges with much higher membership numbers (such as the College of Paramedics, ~8,800 members as of 2023). With more regulated members, costs and expenses can be spread over more individuals. As of 2024, the College has just over 950 regulated members.</p>

            <h3>Compliance of the profession and cooperation with the College</h3>
            <p>The higher the overall, proactive compliance with regulatory requirements, the less programming is needed from the regulator to ensure the public interest is protected. When there is moderate to low overall cooperation with the regulator, more programming and monitoring of the profession is needed to ensure protection of the public interest.</p>

            <h3>Volume and complexity of complaints</h3>
            <p>The volume and complexity of complaints is a major driver of regulatory costs. There are legal limitations on the College's ability to recover costs of discipline from regulated members who are found guilty of unprofessional conduct.</p>

            <h3>Reserved funds</h3>
            <p>For colleges to remain financially responsible, they require financial reserves. For example, if there is a year that the College sees an influx of professional conduct complaints, there needs to be money set aside to properly address them. The Council provides direction on the amount of reserves required to ensure sustainability.</p>

            <div class="callout">
                <strong>Addressing common misconceptions:</strong> The average income of regulated members is not considered a factor in setting fees. Neither is their scope of practice. Fees are set to ensure the organization can cover its operational costs to fulfill regulatory requirements as set out by government.
            </div>
        </section>

        <!-- FEE INCREASE -->
        <section class="content-section" id="fee-increase">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-chart-line"></i></span>
                The 2022 fee increase
            </h2>
            <p>In 2021, the College found itself in a negative financial position due to an influx of professional conduct costs. The College engaged an external and independent organization (HGA) to investigate how this happened and what was required for the College to become financially healthy and remain that way into the future. HGA determined that a fee increase to $1,200 was necessary to ensure the continued financial health of the College.</p>
        </section>

        <!-- KEEP FEES LOW -->
        <section class="content-section" id="keep-fees-low">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-hand-holding-dollar"></i></span>
                How you can help keep fees low
            </h2>

            <h3>Adhere to College deadlines</h3>
            <p>Dealing with late filings costs more than the College can recover, even after charging penalties.</p>

            <h3>Maintain compliance with standards</h3>
            <p>Regularly examine your compliance with the Code of Ethics, Standards of Practice, and other College rules and directives. Violations of standards are harmful to the public and it is expensive for the College to manage complaints.</p>

            <h3>Adhere to Continuing Competence requirements</h3>
            <p>Failure to take the Continuing Competence Program seriously poses a risk to the public. Acupuncturists who are diligent in continuing competence activities are more likely to keep up-to-date with their profession. Overall, this results in fewer complaints of unprofessional conduct. Coaching, monitoring, and discipline of repeated non-compliant professionals takes a significant amount of resources from the College.</p>

            <h3>Cultivate a regulatory compliance mindset</h3>
            <ul>
                <li>Read all communications from the College</li>
                <li>Take your continuing competence seriously and engage in self-reflective practice</li>
                <li>Understand and address your biases and risks in practice</li>
                <li>Refresh yourself on modern ethical standards in healthcare delivery</li>
                <li>Expand your perspectives by serving on a committee or council of the College or another regulatory college</li>
                <li>Stay up to date with standards and always follow them</li>
                <li>Orient your practice to patient safety, including adapting your awareness for social and cultural values regarding professional boundaries</li>
                <li>Engage in ethical, patient-centred care and evidence-based practice</li>
            </ul>

            <h3>Display your practice permit responsibly</h3>
            <p>Printing and mailing practice permits to all registered acupuncturists annually is costly — both in materials and the high administrative burden required after every renewal or registration. The College trusts regulated members to ensure their practice permit is made available according to legislative requirements, which helps keep fees as low as possible.</p>
        </section>

        <!-- FINANCIAL TRANSPARENCY -->
        <section class="content-section" id="financial-transparency">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-magnifying-glass-dollar"></i></span>
                Financial transparency
            </h2>
            <p>Our <a href="/corporate-plans-reports/">annual reports</a> include audited financial statements and are published on our website.</p>
            <p>The College is expected by government to be properly resourced and fiscally responsible. Every year, audited financial statements are produced by professional auditors who conduct a comprehensive audit of the College. Through our annual reports, these statements are filed with the government and tabled in the legislature.</p>
            <p>Colleges are not required to hold annual general meetings. Instead, the public has access to our financial information through the annual reports published on our website. Other health regulators post their financial statements in their annual reports as well; if you are interested in how other regulators manage their budgets, you are encouraged to look at other college annual reports.</p>
            <div class="callout">
                To learn more about the programs and services your fees fund, watch our videos on the <a href="/about-the-college/">Who We Are page</a>.
            </div>
        </section>

        <!-- INSURANCE AND ASSOCIATION -->
        <section class="content-section" id="insurance-association">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-building"></i></span>
                Insurance and association costs
            </h2>
            <h3>Insurance</h3>
            <p>The College determines the type and amount of insurance required to ensure public safety. It does not have authority to influence these costs.</p>

            <h3>Association fees</h3>
            <p>As with all regulated professions, professional associations have no affiliation with a regulatory College. Therefore, the College does not set or influence the fee for joining an association. Membership in an association is voluntary.</p>

            <div class="callout-warning">
                <strong>A note on massage therapist fees and other unregulated professions:</strong> According to our recent surveys, a high percentage of our regulated members are also massage therapists. It may be tempting to compare the College's fees to those of the Massage Therapist Association of Alberta. However, massage therapy is not a regulated profession and does not have to satisfy the requirements set out through Alberta legislation. College and association costs are determined by very different factors.
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
