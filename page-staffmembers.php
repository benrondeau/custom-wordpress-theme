<?php 
/*
 * 
 * Template Name: Team Member Home Page
 * 
 */
get_header(); ?>

<!-- Interior Page Content -->
<article id="interior-page-text" class="team-member-interior">
    <h1><?php echo get_the_title(); ?></h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</article>
<!-- END Interior Page Content -->

<?php get_footer(); ?>
