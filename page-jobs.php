<?php
/*
    Template Name: Job Board
*/

get_header(); ?>

<!-- Interior Page Content -->
<article id="interior-page-text">
    <h1><?php echo get_the_title(); ?></h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</article>

<aside id="interior-page-sidebar">
<?php  get_sidebar('jobs'); ?>
</aside>

<!-- END Interior Page Content -->

<?php get_footer(); ?>
