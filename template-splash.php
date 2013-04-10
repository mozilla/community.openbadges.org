<?php
/**
 * Template Name: Open Badges Community Splash
 */
get_header(); ?>
    <div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title();?></h1>
      <?php the_content();?>
    </div>


<?php endwhile; endif; ?>

</div>
<?php get_footer();?>
