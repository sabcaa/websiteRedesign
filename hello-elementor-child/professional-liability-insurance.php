<?php
/**
 * Template Name: Professional Liability Insurance
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Professional Liability Insurance',
    'subtitle' => 'Requirements for professional liability insurance for registered acupuncturists in Alberta.',
    'breadcrumbs' => array(
        'Home'        => '/',
        'Registrants' => '/registrants/',
    )
)); ?>

<div class="simple-page-layout">

    <!-- REQUIREMENTS -->
    <section class="content-section">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-shield-halved"></i></span>
            Requirements
        </h2>
        <p>The College of Acupuncturists of Alberta requires all regulated members (excluding non-practicing members) to carry professional liability insurance (PLI) of at least <strong>$2 million per claims/occurrence</strong> at all times.</p>

        <div class="callout-warning">
            As a result of bylaw amendments in July 2025, all acupuncturists are required to have coverage for disciplinary legal defense and expenses. <a href="/uncategorized/changes-to-professional-liability-insurance/">Read the announcement for further information about this important change</a>.
        </div>

        <p>Adequate insurance coverage protects both the patient and the acupuncturist. Professional liability insurance protects the public by ensuring they have recourse in the event of harm caused by a registrant. An acupuncturist is protected professionally and financially from claims (real, alleged or false) made against them as a result of rendering professional services.</p>

        <p>All members should review their professional liability insurance to confirm the renewal date and ensure that they have professional liability insurance in force at all times in the amount and type required by the College.</p>
    </section>

    <!-- INSURANCE PROVIDERS -->
    <section class="content-section">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-building"></i></span>
            Insurance providers
        </h2>
        <p>The College does not endorse any insurance provider or policy. The following options are provided for general information only. They are provided in good faith; however, we make no representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, reliability, validity, availability or completeness of the service or product.</p>
        <ul>
            <li>Lloyd Sadd</li>
            <li>HUB</li>
            <li>Paisley Partners Inc</li>
        </ul>
    </section>

    <!-- FAQ -->
    <section class="content-section">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-circle-question"></i></span>
            Frequently asked questions
        </h2>
        <?php get_template_part( 'template-parts/qa-block', null, array(
            'items' => array(
                array(
                    'q' => 'How should I handle the insurance portion of the renewal form if my insurance period is not the same as the College\'s renewal period?',
                    'a' => 'The College is mindful that members\' insurance coverage periods may not exactly match up with the College\'s renewal timeframe. Members can upload insurance certificates with other timeframes, as long as the certificate is currently valid.',
                ),
                array(
                    'q' => 'Do I need insurance coverage that covers me until the next renewal period in order for my renewal to be approved?',
                    'a' => '<p>No, your insurance document does not need to be valid until the next renewal period in order for your renewal to be approved, as long as the certificate is currently valid. Members are responsible to carry up-to-date insurance while they are practicing and to update their insurance documents on their member profile throughout the year as necessary.</p><p>For example: if you are renewing in March 2023 and your insurance expires in December 2023, you would not be required to purchase extra insurance at the time of renewal. You would upload your insurance that is valid at the time of your 2023 renewal. Prior to your insurance expiring in December 2023, you would update your profile on the Member Portal with up-to-date insurance once you purchase it for the following year. You would be required to have a valid insurance certificate on file to renew in 2024.</p>',
                ),
            ),
        )); ?>

        <div class="callout" style="margin-top: 16px;">
            <strong>Still have questions?</strong> Contact the College at <a href="mailto:info@acupuncturealberta.ca">info@acupuncturealberta.ca</a> or 780-466-7787.
        </div>
    </section>

</div>

<?php get_footer(); ?>
