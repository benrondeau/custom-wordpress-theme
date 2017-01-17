<?php
/*
 Single Blog Entry Page
*/

get_header(); ?>


<?php get_header(); ?>

<!-- Blog Entry Content -->
<article id="interior-page-text">
    <h1><?php echo get_the_title(); ?></h1>

<?php if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;?>

<p style="margin-top:40px;"><a href="<?php bloginfo('url');?>/blog">< Back to Home</a></p>

</article>

<aside id="interior-page-sidebar">
<?php  get_sidebar(); ?>
</aside>

<!-- END Blog Entry Content -->

<?php get_footer(); ?>
