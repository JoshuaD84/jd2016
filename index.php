<?php get_header(); ?> 

<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
   <a class='post-summary' href="<?php the_permalink();?>">
   <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail()?>
   <?php endif; ?>
   <h1><?php the_title(); ?></h1>
   <p class="post-summary-date"><?php the_date(); ?></p>
   <?php the_excerpt (); ?>
   </a>
   <?php if ($wp_query->current_post != $wp_query->post_count) : ?>
      <hr class="section-divide" />
   <?php endif; ?>
<?php endwhile; endif; ?>

<? get_footer(); ?>
