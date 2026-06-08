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

    <!-- ABOUT PROGRAM APPROVAL --> 
    <section class="content-section" id="about">
        <h2>
                <span class="section-icon"><i class="fa-solid fa-circle-info"></i></span>
                About program approval
        </h2>
        <p>The College of Acupuncturists of Alberta approves education programs for the purposes of registration under the <em>Health Professions Act</em>. </p>
        <p>Approval status reflects the College's regulatory assessment for registration purposes only. The status does not constitute a ranking of programs and is not an assessment of educational quality or institutional merit.</p>
        <p>The approval given by the College is distinct from approvals granted by the Government of Alberta or other post-secondary quality assurance bodies.</p>
        <p>Graduates of an approved program may be eligible to apply for registration with the College, provided they meet all applicable requirements.</p>

    </section>
        

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

        <p>The following approval statuses are used:</p>
        <table class="caa-table">
            <thead>
                <tr>
                   <th>Status</th>
                    <th>Definition</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Approved</td>
                    <td>The program currently meets the College&rsquo;s requirements for registration purposes.</td>
                 </tr>
                <tr>
                    <td>Provisional Approval</td>
                    <td>The program is approved for registration purposes and is subject to specified conditions, monitoring, or ongoing review.</td>
                </tr>
                <tr>
                    <td>Preliminary Approval</td>
                    <td>The program is in the early stages of approval and is undergoing initial review. Graduates may be eligible for registration, subject to meeting applicable requirements.</td>
                </tr>
            </tbody>
        </table>

        <h3>Approved programs</h3>
            <ul>
                <li><strong>Calgary College of Traditional Chinese Medicine and Acupuncture</strong> &mdash; Acupuncture Diploma Program, next review Spring 2027</li>
                <li><strong>Canadian Institute of Traditional Chinese Medicine and Acupuncture</strong> &mdash; Acupuncture Diploma Program, next review Spring 2027</li>
                <li><strong>MacEwan University</strong> &mdash; Acupuncture Program, next review Spring 2027</li>
            </ul>

        <h3>Programs with provisional approval</h3>
            <ul>
                <li><strong>Alberta College of Acupuncture and Traditional Chinese Medicine</strong> &mdash; Acupuncture Diploma program, next review Spring 2026</li>
            </ul>

        <h3>Programs with preliminary approval</h3>
            <ul>
                <li><strong>Alberta College of Acupuncture and Traditional Chinese Medicine</strong> &mdash; Bachelor of Acupuncture program, next review Spring 2027</li>
            </ul>

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
                <div class="program-card-name">MacEwan University</div>
                <div class="program-card-link">
                    <a href="https://www.macewan.ca/academics/programs/acupuncture/" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">
                        Visit website <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="program-card-city">Calgary</div>
                <div class="program-card-name">Alberta College of Acupuncture and Traditional Chinese Medicine</div>
                <div class="program-card-link">
                    <a href="https://www.acatcm.com/acupuncture-diploma/" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">
                        Visit website <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="program-card-city">Calgary</div>
                <div class="program-card-name">Calgary College of Traditional Chinese Medicine and Acupuncture</div>
                <div class="program-card-link">
                    <a href="https://cctcma.com/" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">
                        Visit website <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="program-card-city">Calgary</div>
                <div class="program-card-name">Canadian Institute of Traditional Chinese Medicine and Acupuncture</div>
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
