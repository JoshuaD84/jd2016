<?php get_header(); ?> 

<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
   <h1 id="page-title"><?php the_title(); ?></h1>
   <?php the_content (); ?>

<?php endwhile; endif; ?>

<? get_footer(); ?>
