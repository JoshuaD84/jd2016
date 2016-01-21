<?php

add_theme_support ( 'post-thumbnails' );

function register_primary_menu() {
   register_nav_menu ( 'primary_menu', __('Primary Menu') );
}

add_action ( 'init', 'register_primary_menu' );

require get_template_directory() . '/social-icons.php';


function jd2016_the_post_list() {
   $posts_array = get_posts ();
   $k = 0; 
   foreach ( $posts_array as $post) {
      echo "<a class='post-summary' href='" . get_permalink ( $post ) . "'>";
    
      if ( has_post_thumbnail($post) )  {
         echo get_the_post_thumbnail( $post );
      }
      echo "<h1>" . $post -> post_title . "</h1>";
      echo "<p class='post-summary-date'>" . get_the_date ( "", $post->ID ) . "</p>";

      if ( empty( $post->post_excerpt ) ) {
         $excerpt =  wp_kses_post( wp_trim_words( $post->post_content, 55 ) );
      } else {
         $excerpt = apply_filters( 'the_excerpt', get_post_field('post_excerpt', $post->ID ));
      }

      echo "<p><!--excerpt-->" . $excerpt . "</p>";
      echo "</a>";
      if ($k < count ( $posts_array ) ) {
         echo "<hr class='section-divide' />";
      }
      $k++;
   }
}
