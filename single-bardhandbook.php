<?php
/*
Single Post Template: Bard Handbook
Description: only for use with the bard handbook
*/
?>
<?php get_header(); ?> 

<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
   <?php the_content (); ?>

<?php endwhile; endif; ?>

<? get_footer(); ?>
