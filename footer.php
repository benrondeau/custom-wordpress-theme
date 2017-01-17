</div>
    <!-- END Centered Container for Page Content -->

    <!-- Full Width Footer -->
    <footer>
       <div class="container">
            <section id="job-board">
               <img src="<?php echo get_template_directory_uri(); ?>/img/afp-logo.png" alt="AFP Logo">
               <img src="<?php echo get_template_directory_uri(); ?>/img/cfre-logo.png" alt="CFRE Logo">
                <h4>Job Board</h4>
                <p><a href="/jobs/">Current Job Openings</a></p>
                <p><a href="/placement-services/upload-resume/">Upload Resume</a></p>
                <p><a href="<?php echo site_url(); ?>/jobs">Look for a Job</a></p>
            </section>

            <section id="newsletter-signup">
               <h4>Receive Our Newsletter</h4>
                <?php echo do_shortcode( '[emma_form]' ) ?>
            </section>

            <section id="social-icons">
                <h4>Connect</h4>
                <a href="https://www.facebook.com/pages/Bacon-Lee-Associates/135316946517565" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-logo.png" alt="Facbook Icon"></a>
            </section>

            <section id="contact-us">
                <h4>Contact Us</h4>
                <p><strong>San Antonio</strong> 210-733-0893</p>
                <p><strong>Austin</strong> 512-298-7785</p>
                <p><strong>Fax</strong> 210-733-3502</p>
                <p>PO Box 15018<br>San Antonio TX 78212</p>
                <p><a href="mailto:info@baconlee.com">info@baconlee.com</a></p>
            </section>
        </div>
    </footer>

    <!-- Javascript Files -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/author/main.min.js"></script>

</body>
</html>

<?php wp_footer(); ?>
