<?php get_header(); ?>


<!-- Homepage Content -->
<section id="homepage-photo-slider">
    <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '4' ); }
if ( function_exists( 'soliloquy' ) ) { soliloquy( 'homepage-slider', 'slug' ); } ?>
</section>

<section id="main-buttons-under-slider">
	<a href="<?php echo site_url(); ?>/who-we-are/our-team/">Our Team</a>
	<a href="<?php echo site_url(); ?>/faqs/">FAQs</a>
	<a href="<?php echo site_url(); ?>/jobs/">Job Board</a>
    <a href="<?php echo site_url(); ?>/resources/">Resources</a>    
</section>

<section id="homepage-content">
    <h1>Success Stories</h1>
    <ul>
        <figure class="homepage-image-boxes">
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/Cibolo-Nature-Center.jpeg" alt="Cibolo Nature Center">
                <div class="homepage-image-rollover-box">
                    <h3>Cibolo Nature Center</h3>
                    <p>The Cibolo Nature Center, dedicated to the protection and conservation of the Texas Hill Country, provides education, research and entertainment and outdoor activities to more than 100,000 visitors a year, on 100 acres of trails and wilderness areas...</p>
                    <a href="<?php echo site_url(); ?>/our-results/case-studies/cibolo-nature-center/">MORE ></a>
                </div>
            </li>
            <p>Cibolo Nature Center</p>
        </figure>
        <figure class="homepage-image-boxes">
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/baptist-home.jpg" alt="Baptist Health Foundation">
                <div class="homepage-image-rollover-box">
                    <h3>Baptist Health Foundation</h3>
                    <p>The Baptist Health Foundation of San Antonio provides charitable support for a variety of nonprofits including healthcare clinics, indigent care programs, assisted living facilities, substance abuse programs, behavioral health facilities, health education scholarships and other not-for-profit healthcare...</p>
                    <a href="<?php echo site_url(); ?>/our-results/case-studies/baptist-health-foundation/">MORE ></a>
                </div>
            </li>
            <p>Baptist Health Foundation</p>
        </figure>
        <figure class="homepage-image-boxes">
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/st-andrews-home.jpg" alt="Saint Andrews">
                <div class="homepage-image-rollover-box">
                    <h3>St. Andrew's Episcopal School</h3>
                    <p>St. Andrew’s Episcopal School needed a new fine arts center for the campus of its upper school.  More space, enhanced technology, and state-of-the-art equipment was essential in providing students the experiences to develop their creativity, addressing one of the four “pillars” of SAS’s educational mission...</p>
                    <a href="<?php echo site_url(); ?>/our-results/case-studies/saint-andrews-episcopal-school/">MORE ></a>
                </div>
            </li>
            <p>St. Andrew's Episcopal School</p>
        </figure>
    </ul>
</section>

<section id="homepage-quote" class="clearfix">
    <p id="quote">"Bacon Lee helped us get to that next level. I'm not sure we could have gotten there on our own."</p>
</section>
<!-- END Homepage Content -->


<?php get_footer(); ?>
