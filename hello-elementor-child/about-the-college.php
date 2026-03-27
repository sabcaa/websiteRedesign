<?php
/**
 * Template Name: Who We Are
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Who We Are',
    'subtitle' => 'The College of Acupuncturists of Alberta regulates acupuncturists in Alberta in the public interest.',
    'breadcrumbs' => array(
        'Home' => '/',
        'College' => 'College'
    )
)); ?>

<div class="who-we-are-layout">

    <!-- VISION & MISSION -->
    <section class="content-section" id="vision-mission">
         <h2>Our vision and mission</h2>
        <div class="vision-mission-grid">
            <div class="vision-card">
                <div class="vm-label">Our Vision</div>
                <p>Acupuncturists are primary care practitioners providing safe collaborative care for the health and wellness of Albertans.</p>
            </div>
            <div class="mission-card">
                <div class="vm-label">Our Mission</div>
                <p>To protect Albertans by establishing and upholding professional standards for acupuncturists through regulatory excellence.</p>
            </div>
        </div>
     
    </section>

    <!-- VALUES -->
    <section class="content-section" id="values">
        <h2>Our values</h2>
        <div class="values-grid">
            <div class="value-item">
                <img src="/wp-content/uploads/2023/04/Integrity-shadow.png" alt="" aria-hidden="true" class="value-icon">
                <h3>Integrity</h3>
                <p>Prioritize being honest and authentic above all else.</p>
            </div>
            <div class="value-item">
                <img src="/wp-content/uploads/2023/04/Innovation-shadow.png" alt="" aria-hidden="true" class="value-icon">
                <h3>Innovation</h3>
                <p>Believe that if we are not getting better, we are not moving forward.</p>
            </div>
            <div class="value-item">
                <img src="/wp-content/uploads/2023/04/Drive-shadow.png" alt="" aria-hidden="true" class="value-icon">
                <h3>Drive</h3>
                <p>Be the catalyst that creates change.</p>
            </div>
            <div class="value-item">
                <img src="/wp-content/uploads/2023/04/Leadership-shadow.png" alt="" aria-hidden="true" class="value-icon">
                <h3>Leadership</h3>
                <p>Be motivated by making others stronger.</p>
            </div>
            <div class="value-item">
                <img src="/wp-content/uploads/2023/04/Collaboration-shadow.png" alt="" aria-hidden="true" class="value-icon">
                <h3>Collaboration</h3>
                <p>Know that we can raise the bar higher together than any one person can alone.</p>
            </div>
        </div>
    </section>

    <!-- HISTORY, MISSION, AND WHAT WE DO VIDEOS-->
    <section class="content-section" id="video-section">
        <h2>Our story</h2>

        <div class="video-grid">
            <div class="video-embed">
                <iframe 
                    width="560" 
                    height="315" 
                    src="https://www.youtube.com/embed/6hgD_PjGK_w" 
                    title="History of the College" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>

            <div class="video-embed">
                <iframe 
                    width="560" 
                    height="315" 
                    src="https://www.youtube.com/embed/Cj6jux7oayY" 
                    title="What the College does" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
               
         <!---mission video-->
            <div class="video-embed">
                <iframe 
                    width="560" 
                    height="315" 
                    src="https://www.youtube.com/embed/tRbWnjjDPPo" 
                    title="Vision, mission, values of the College" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div >
    </section>

    <!-- COLLEGE VS ASSOCIATION -->
    <section class="content-section" id="college-vs-association">
        <h2>Relationship between a College and an Association</h2>
        <p>Colleges and Associations exist for very different reasons, and each functions differently in terms of purpose. One is not interchangeable for another. A regulated profession benefits when both entities co-exist and work together to fulfill their primary goals.</p>
        <?php echo do_shortcode('[table id=4 /]'); ?>
    </section>

    <!-- LEGISLATION -->
    <section class="content-section" id="legislation">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-landmark"></i></span>
            Legislation
        </h2>
        <p>The College of Acupuncturists of Alberta operates under the authority of the following Alberta legislation.</p>
        <ul class="doc-list">
            <li>
                <div class="doc-row">
                    <span class="doc-name"><em>Health Professions Act</em></span>
                    <a href="https://kings-printer.alberta.ca/1266.cfm?page=H07.cfm&leg_type=Acts&isbncln=9780779860722" class="doc-action" target="_blank" rel="noopener noreferrer">View document <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">Acupuncturists Profession Regulation</span>
                    <a href="https://kings-printer.alberta.ca/1266.cfm?page=2020_255.cfm&leg_type=Regs&isbncln=9780779830213" class="doc-action" target="_blank" rel="noopener noreferrer">View document <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                </div>
            </li>
            <li>
                <div class="doc-row">
                    <span class="doc-name">Health Professions Restricted Activity Regulation</span>
                    <a href="https://kings-printer.alberta.ca/1266.cfm?page=2023_022.cfm&leg_type=Regs&isbncln=9780779840748" class="doc-action" target="_blank" rel="noopener noreferrer">View document <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                </div>
            </li>
        </ul>
    </section>

    <!-- MEET THE COUNCIL CTA -->
    <div class="cta-section" id="council">
        <div>
            <h2>Meet the Council</h2>
            <p>Curious to know who's behind the College of Acupuncturists of Alberta?</p>
        </div>
        <a href="/meet-the-council/" class="btn btn-secondary">Meet the Council</a>
    </div>

</div>

<?php get_footer(); ?>
