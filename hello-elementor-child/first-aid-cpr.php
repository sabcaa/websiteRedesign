<?php
/**
 * Template Name: First aid CPR
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'First Aid and CPR Requirements',
    'subtitle' => 'Information about first aid and CPR requirements acupuncturists in Alberta must meet.',
    'breadcrumbs' => array(
        'Home'       => '/',
        'Registrants' => '/registrants/',
    ),
    
)); ?>

<div class="page-layout">
    <aside class="sidebar">
        <!-- TOC -->
                
        <?php get_template_part( 'template-parts/sidebar-toc', null, array(
                'items' => array(
                'Certification requirements' => '#certification-requirements',
                'Acceptable training' => '#acceptable',
                'Approved training agencies' => '#approved-agencies'
                ),
                'cta_primary' => array(
                    'label' => 'Contact us',
                    'url'  => '/contact-us/',
                ),
                'cta_secondary' => array(
                    'label' => 'Training agencies',
                    'url' => 'https://ohs-pubstore.labour.alberta.ca/fa018',
                    
                )
            )); 
        ?>
    </aside>

    <main class="main-content">
        <!-- page content -->
        <section class="content-section" id="certification-requirements">
            <h2>
                <span class="section-icon"><i class="fa-solid fa-list-check"></i></span>
               Certification requirements
            </h2>
            <p>A valid standard first aid and CPR-C certification is a requirement for new and existing registrants.&nbsp;</p>
            <p>A certification must include the following information:</p>
                <ul>
                    <li>Indication of standard first aid and CPR-C (at minimum)</li>
                    <li>Recipient</li>
                    <li>Expiry date</li>
                    <li>Training provider (must be approved by Alberta Occupational Health and Safety)</li>
                </ul>
              <?php get_template_part( 'template-parts/qa-block', null, array(
                'items' => array(
                   
                    array(
                        'q' => 'Can I use a first aid/CPR course to earn CCP credits?',
                        'a' => 'No, first aid/CPR are not part of the CCP program. Do not claim first aid/CPR for CCP credits. Doing so will put your registration renewal (and ability to practice) at risk.',
                    ),
                     array(
                        'q' => 'Do I need to take a first aid/CPR course every year if my certification is valid for 3 years?',
                        'a' => 'No. You do not need to take a first aid/CPR course every year if your certification is valid for 3 years. You will need to take another first aid/CPR course to re-certify when your certification expires.',
                    ),
                ),
                ));              
            ?>
    </section>
    
    <section class="content-section" id="acceptable">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-check"></i></span>
            Acceptable CPR and first aid training
        </h2>

         <?php get_template_part( 'template-parts/qa-block', null, array(
                'items' => array(
                   
                    array(
                        'q' => 'Is a blended first aid/CPR course acceptable?',
                        'a' => 'Yes, a blended first aid/CPR course is acceptable. CPR with no indication of level is not accepted.',
                    ),
                ),
                ));
            ?>

        <table class="caa-table">
            <thead>
                <tr>
                    <th></th>
                    <th>✓ Acceptable</th>
                    <th>X Not acceptable</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td><strong>CPR</strong></td>
                <td>
                <p>Basic life support (BLS)</p>
                <p>CPR-C with AED</p>
                </td>
                <td>
                    <p>CPR-B</p>
                    <p>CPR-A</p>
                    <p>Courses with no indication of level</p>
                </td>
            </tr>
            <tr>
                <td><strong>First aid</strong></td>
                <td>
                <p>First responder</p>
                <p>Advanced</p>
                <p>Standard/intermediate</p>
                </td>
                <td>
                <p>Emergency</p>
                <p>Basic</p>
                </td>
            </tr>
        </tbody>
        </table>
    </section>

    <section class="content-section" id="approved-agencies">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-bullseye"></i></span>
            Approved training agencies
        </h2>
        <p>The College does not approve training agencies.</p>
        <p>Registrants must obtain standard first aid and CPR-C training from an organization approved by Alberta Occupational Health and Safety. A complete <a href="https://ohs-pubstore.labour.alberta.ca/fa018">list of approved training agencies is available on the Alberta government&rsquo;s website.</a></p>
        <p>Many programs offer a 3-year certification. Check how long your chosen program&rsquo;s certification lasts.</p>
        <p>Visit an approved training agency&rsquo;s website for more information on the courses they offer. For example, visit&nbsp;<a href="http://myrc.redcross.ca/">Canadian Red Cross Society</a>&nbsp;for a list of their courses. Using Google Search to find training agencies is not advised as some websites may include misleading information.</p>
        <p>It is important to note that training agencies may work with different providers or partners. Always enter the TRAINING AGENCY when filling out your renewal form.</p>

         <?php get_template_part( 'template-parts/qa-block', null, array(
                'items' => array(
                   
                    array(
                        'q' => 'Is a first aid/CPR course from outside of Alberta acceptable?',
                        'a' => 'Yes, a course from outside of Alberta is acceptable, as long as it was obtained from an approved training agency.',
                    ),
                ),
                ));
            ?>

            
       
    </section>


  
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
  