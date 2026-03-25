<?php
/**
 * Template Name: Approved Programs
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Approved Programs',
    'subtitle' => 'Acupuncture education programs approved by the College of Acupuncturists of Alberta.',
    'breadcrumbs' => array(
        'Home'       => '/',
        'Applicants' => '/applicants/',
    )
)); ?>

<div class="programs-layout">

    <!-- PROGRAM APPROVAL STATUS -->
    <section class="content-section" id="approval-status">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-circle-check"></i></span>
            Program approval status
        </h2>
        <p>Program approval is determined in accordance with the Acupuncture Education Program Review Policy and Procedure. The review process involves a comprehensive site visit to the education institution and its student clinic. The College's Council makes the approval decision based on the results of the program review.</p>

        <?php get_template_part( 'template-parts/resource-download', null, array(
            'title' => 'Acupuncture Education Program Review Policy',
            'url'   => esc_url( get_field('docaeprpolicy') ),
        )); ?>

        <?php get_template_part( 'template-parts/resource-download', null, array(
            'title' => 'Acupuncture Education Program Review Procedure',
            'url'   => esc_url( get_field('docaeprprocedure') ),
        )); ?>

        <table class="caa-table" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th>Program</th>
                    <th>City</th>
                    <th>Status</th>
                    <th>Next Review (Anticipated)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ACATCM</td>
                    <td>Calgary</td>
                    <td>Provisional Approval</td>
                    <td>Spring 2026</td>
                </tr>
                <tr>
                    <td>CCTCMA</td>
                    <td>Calgary</td>
                    <td>Approved</td>
                    <td>Spring 2027</td>
                </tr>
                <tr>
                    <td>CITCM</td>
                    <td>Calgary</td>
                    <td>Approved</td>
                    <td>Spring 2027</td>
                </tr>
                <tr>
                    <td>MacEwan University</td>
                    <td>Edmonton</td>
                    <td>Approved</td>
                    <td>Spring 2027</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- PROGRAM CARDS -->
    <section class="content-section" id="programs">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-school"></i></span>
            Programs
        </h2>
        <p>For detailed information about each program, including curriculum and tuition, visit the program's website.</p>

        <div class="program-cards">

            <div class="program-card">
                <div class="program-card-city">Edmonton</div>
                <div class="program-card-name">MacEwan University — Acupuncture Program</div>
                <div class="program-card-status">Status: Approved</div>
                <div class="program-card-link">
                    <a href="https://www.macewan.ca/academics/programs/acupuncture/" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">
                        Visit website <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="program-card-city">Calgary</div>
                <div class="program-card-name">Alberta College of Acupuncture and Traditional Chinese Medicine — Acupuncture Program</div>
                <div class="program-card-status">Status: Provisional Approval</div>
                <div class="program-card-link">
                    <a href="https://www.acatcm.com/acupuncture-diploma/" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">
                        Visit website <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="program-card-city">Calgary</div>
                <div class="program-card-name">Calgary College of Traditional Chinese Medicine and Acupuncture — Acupuncture Diploma Program</div>
                <div class="program-card-status">Status: Approved</div>
                <div class="program-card-link">
                    <a href="https://cctcma.com/" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">
                        Visit website <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="program-card-city">Calgary</div>
                <div class="program-card-name">Canadian Institute of Traditional Chinese Medicine and Acupuncture — Acupuncture Diploma Program</div>
                <div class="program-card-status">Status: Approved</div>
                <div class="program-card-link">
                    <a href="https://citcm.com/citcm-programs/acupuncture-diploma-program/" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">
                        Visit website <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

</div>

<?php get_footer(); ?>
