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
    )
)); ?>

<div class="who-we-are-layout">

    <!-- VISION & MISSION -->
    <section class="content-section" id="vision-mission">
         <h2>Our mission and vision</h2>
        <div class="vision-mission-grid">
            <div class="vision-card">
                <div class="vm-label">Our Vision</div>
                <p>Acupuncturists are primary care practitioners providing safe collaborative care for the health and wellness of Albertans.</p>
            </div>
            <div class="mission-card">
                <div class="vm-label">Our Mission</div>
                <p>To protect Albertans by establishing and upholding professional standards for acupuncturists through regulatory excellence.</p>
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

    <!-- COLLEGE VS ASSOCIATION -->
    <section class="content-section" id="college-vs-association">
        <h2>Relationship between a College and an Association</h2>
        <p>Colleges and Associations exist for very different reasons, and each functions differently in terms of purpose. One is not interchangeable for another. A regulated profession benefits when both entities co-exist and work together to fulfill their primary goals.</p>
        <?php echo do_shortcode('[table id=4 /]'); ?>
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
