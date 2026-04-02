<?php
/**
 * Front page template
 * College of Acupuncturists of Alberta - Child Theme
 */

get_header();
?>

<main id="site-main">

    <!-- ================================================
         AUDIENCE SECTION
    ================================================ -->
    <section class="home-page-audience">
        <div class="home-inner">
            <div class="audience-grid">

                <div class="audience-card">
                    <img src="<?php echo esc_url( content_url( '/uploads/elementor/thumbs/noun-people-4211382DG-r52tu5qyzwsoq1vqpue1132noggt2ffjtggcogf72w.png' ) ); ?>" alt="" aria-hidden="true">
                    <h2>For the Public</h2>
                    <hr class="audience-divider">
                    <ul>
                        <li><a href="https://caa.alinityapp.com/client/publicdirectory" target="_blank" rel="noopener">Verify a registered acupuncturist</a></li>
                        <li><a href="/complaint-process/">Submit a complaint</a></li>
                    </ul>
                </div>

                <div class="audience-card">
                    <img  src="<?php echo esc_url( content_url( '/uploads/elementor/thumbs/noun-membership-4874634Grey-r52tu5qyzwsnp80j01gelqa5nrjli4tzos6gkt3g4m.png' ) ); ?>" alt="" aria-hidden="true">
                    <h2>For Regulated Members</h2>
                    <hr class="audience-divider">
                    <ul>
                        <li><a href="https://caa.alinityapp.com" target="_blank" rel="noopener">Member portal</a></li>
                        <li><a href="/resources/member-portal-support/" target="_blank" rel="noopener">Member portal support</a></li>
                        <li><a href="/renewal/" target="_blank" rel="noopener">Practice permit renewal</a></li>
                        <li><a href="/continuing-competence-program/" target="_blank" rel="noopener">Continuing competence</a></li>
                    </ul>
                </div>

                <div class="audience-card">
                    <img src="<?php echo esc_url( content_url( '/uploads/elementor/thumbs/Applicants-and-Students-r52tu5qzavhniel3qjxpfbtqubwnww8on186pkerbs.png' ) ); ?>" alt="" aria-hidden="true">
                    <h2>For Students &amp; Applicants</h2>
                    <hr class="audience-divider">
                    <ul>
                        <li><a href="/approved-acupuncture-education-programs/" target="_blank" rel="noopener">Education programs</a></li>
                        <li><a href="/exams/" target="_blank" rel="noopener">Exam information</a></li>
                        <li><a href="/applicants/applications/" target="_blank" rel="noopener">Applications</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- ================================================
         RECENTLY AT THE COLLEGE
    ================================================ -->
    <section class="home-recent-posts">
        <div class="home-inner">
            <h2>Recently at the College</h2>
            <hr class="section-divider">

            <div class="recent-posts-grid">
                <?php
                $recent_posts = new WP_Query( array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                ) );

                if ( $recent_posts->have_posts() ) :
                    while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
                ?>
                    <div class="recent-post-card">
                        <h3 class="recent-post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="recent-post-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20, '&hellip;' ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Read more</a>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- ================================================
         ABOUT THE COLLEGE
    ================================================ -->
    <section class="home-about">
        <div class="home-inner">
            <div class="about-grid">

                <div class="about-video">
                    <div class="video-wrapper">
                        <iframe
                            src="https://www.youtube.com/embed/Cj6jux7oayY"
                            title="About the College of Acupuncturists of Alberta"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            loading="lazy"
                        ></iframe>
                    </div>
                </div>

                <div class="about-text">
                    <h2>About the College of Acupuncturists<br>of Alberta</h2>
                    <hr class="section-divider">
                    <p>The College of Acupuncturists of Alberta regulates the practice of acupuncture in Alberta. We protect Albertans by establishing and upholding professional standards for acupuncturists through regulatory excellence.</p>
                    <a href="/about-the-college/" class="btn btn-primary">About us</a>
                </div>

            </div>
        </div>
    </section>

    <!-- ================================================
         WHAT IS ACUPUNCTURE?
    ================================================ -->
    <section class="home-acupuncture">
        <div class="home-inner">
            <div class="acupuncture-content">
                <h2>What is Acupuncture?</h2>
                <hr class="section-divider">
                <p><strong>Acupuncture</strong> is a complete system of medicine based on Traditional Chinese Medicine principles and modern scientific and physiologic systems. It is used to assess, diagnose and treat.</p>
                <p>Acupuncture is administered to</p>
                <ul>
                    <li>promote, maintain, restore or improve health</li>
                    <li>prevent disorder, imbalance or disease</li>
                    <li>alleviate pain</li>
                    <li>facilitate healing</li>
                    <li>increase mobility</li>
                    <li>restore function and quality of life</li>
                </ul>
                <p>It refers to the stimulation of specific points, identified by anatomical and physiological standards, as well as by manual inspection &amp; palpation. Stimulation of points elicits a predictable physiological response including neurophysiological responses in the muscles, spinal cord and brain, as well as biochemical and hormonal responses in the body.</p>
                <p>These responses either change the body's experience of symptoms, especially pain, or trigger the release of substances which influence the body's internal regulation. This includes the administration of manual, mechanical, thermal and electro-therapeutic stimulation.</p>
                <p>As an integral part of the healthcare team, Acupuncturists may collaborate with other healthcare professionals to provide a comprehensive treatment plan that best meets the patient's needs and goals.</p>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
