<?php
/*
 * Blog Home Template
 */

get_header(); ?>


<article id="interior-page-text" class="blog-home">
    <h1>Blog Home</h1>
    <p>We invite you to join us in discussing philanthropy-related issues.  As topics appear that are of interest to you, please let us hear your thoughts.</p><hr>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

           <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <p class="blog-home-date"><?php the_time('F jS, Y') ?></p>
            <?php the_excerpt(); ?>
			<hr>

        <?php endwhile; ?>
    <?php endif; ?>
	<?php next_posts_link('&larr; Older Posts'); ?>
	<span style="float:right;"><?php previous_posts_link('Newer Posts &rarr;'); ?></span>
</article>

<aside id="interior-page-sidebar">
    <?php  get_sidebar('blog'); ?>
</aside>

<?php get_footer(); ?>
