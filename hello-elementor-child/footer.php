<?php
/**
 * Footer template
 * College of Acupuncturists of Alberta - Child Theme
 */
?>

<footer id="site-footer">

  <div class="footer-main">
    <div class="footer-inner">

      <!-- Logo -->
      <div class="footer-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img
            src="<?php echo esc_url( content_url( '/uploads/2021/11/acupuncture-alberta-logo-gradient_360x130.png' ) ); ?>"
            alt="<?php bloginfo( 'name' ); ?>"
            width="360"
            height="130"
          />
        </a>
      </div>

      <!-- Three columns -->
      <div class="footer-columns">

        <!-- Col 1: About -->
        <div class="footer-col">
          <h2 class="footer-heading">About us</h2>
          <hr class="footer-divider">
          <p>The College of Acupuncturists of Alberta serves the public interest and ensures public safety by setting standards of practice, education, competence and ethical conduct.</p>
          <div class="footer-social">
            <a href="https://www.linkedin.com/company/college-of-acupuncturists-of-alberta/" target="_blank" rel="noopener" aria-label="LinkedIn">
              <i class="fab fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="https://www.facebook.com/College-of-Acupuncturists-of-Alberta-106001371960914" target="_blank" rel="noopener" aria-label="Facebook">
              <i class="fab fa-facebook-f" aria-hidden="true"></i>
            </a>
          </div>
        </div>

        <!-- Col 2: Quick Links -->
        <div class="footer-col">
          <h2 class="footer-heading">Quick links</h2>
          <hr class="footer-divider">
          <ul class="footer-links">
            <li><a href="/exams/">Exams</a></li>
            <li><a href="/about-the-college/">About the College</a></li>
            <li><a href="/meet-the-council/">Meet the Council</a></li>
            <li><a href="/information-for-the-public/">Complaint Process</a></li>
            <li><a href="/contact-us/">Contact Us</a></li>
          </ul>
        </div>

        <!-- Col 3: Connect -->
        <div class="footer-col">
          <h2 class="footer-heading">Connect with us</h2>
          <hr class="footer-divider">
          <ul class="footer-contact">
            <li>Hours: 8:30–4:30 Monday to Friday (closed statutory holidays)</li>
            <li>
              <a href="tel:+17804667787">
                <i class="fas fa-phone-alt" aria-hidden="true"></i>
                780-466-7787
              </a>
            </li>
            <li>
              <i class="fas fa-envelope" aria-hidden="true"></i>
              info@acupuncturealberta.ca
            </li>
            <li>
              <a href="https://g.co/kgs/UnGDyHq" target="_blank" rel="noopener">
                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                #201, 9426 - 51 Avenue NW Edmonton, AB T6E 5A6 (By appointment only)
              </a>
            </li>
          </ul>
        </div>

      </div><!-- .footer-columns -->
    </div><!-- .footer-inner -->
  </div><!-- .footer-main -->

  <!-- Bottom bar -->
  <div class="footer-bottom">
    <div class="footer-inner">
      <p>College of Acupuncturists of Alberta &copy; <?php echo date( 'Y' ); ?>. All Rights Reserved.</p>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
