<?php
/**
 * Template Name: Practice hours
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Practice Hours',
    'subtitle' => 'Information about practice hour requirements for acupuncturists.',
    'breadcrumbs' => array(
        'Home'       => '/',
        'Registrants' => '/registrants/',
    )
)); ?>

<div class="simple-page-layout">
    <main class="main-content">
        <!-- page content -->
          <section class="content-section">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-list-check"></i></span>
                Practice hour requirements
            </h2>
            <p>Practice hour requirements are set by the Government of Alberta in the <a href="https://kings-printer.alberta.ca/1266.cfm?page=2020_255.cfm&leg_type=Regs&isbncln=9780779830213">Acupuncturists Profession Regulation</a>. </p>
            <p>During practice permit renewal, a regulated member must provide evidence of 1,200 practice hours in the past 5 years or was enrolled in a program of studies recognized by the Council.</p>
         

             <?php get_template_part( 'template-parts/qa-block', null, array(
                'items' => array(
                    array(
                        'q' => 'What time period should I input for my practice hours? The last year, or the last three years?',
                        'a' => 'Input your practice hours for the last renewal cycle (April 1-March 31). The system will keep a running total of the last 5 renewal cycles.',
                    )
                ),
            ));?>
        </section>

        <section class="content-section">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-check"></i></span>
                Included in practice hours
            </h2>
            <p>Practice includes time spent to:</p>
            <ul>
                <li>diagnose, treat and prevent diseases, disorders and dysfunctions using methods based on the holistic principles of traditional Chinese medicine and on using methods of stimulating acupuncture points and meridians,</li>
                <li>provide restricted activities authorized by the regulations, and</li>
                <li>teach, manage and conduct research in the science, techniques and practice of acupuncture.</li>
            </ul>
            <?php get_template_part( 'template-parts/qa-block', null, array(
                'items' => array(
                   
                    array(
                        'q' => 'What are practice hours?',
                        'a' => 'Practice hours include hours spent researching, charting, making patient plans, etc.',
                    ),
                ),
                ));
            ?>
        </section>

        <section class="content-section">
            <h2>
                <span class="section-icon"><i class="fas fa-star"></i></span>
                Why practice hours are important
            </h2>
            <p>It's important for acupuncturists to maintain currency hours for public safety reasons. Acupuncturists perform a restricted activity, which poses a higher risk to public safety. Meeting the required number of practice hours maintains an acupuncturist's skills and helps a practitioner remain current with best practices. </p>
           
        </section>



    </main>
</div>

<?php get_footer(); ?>