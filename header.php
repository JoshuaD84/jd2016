<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <meta name='author' content="Joshua Hartwell" />
   <link rel="profile" href="http://gmpg.org/xfn/11" />
   <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
   <?php 
      $additional_sytlesheet = get_post_meta ( get_the_ID(), "additional_stylesheet", true );
      
      if ( !empty ( $additional_sytlesheet ) ) {
         echo '<link rel="stylesheet" type="text/css" href="' . $additional_sytlesheet . '" />';
      }
  
   ?>
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   <!--[if gte IE 9]><!-->
      <link id="responsive-stylesheet" rel="stylesheet" title="default" href="<?php echo get_template_directory_uri();?>/style-responsive.css" type="text/css" media="screen" />
   <!--<![endif]-->
   
   <?php 
      $customTitle = get_post_meta( get_the_ID(), "page_title", true );
      if ( !empty ( $customTitle ) ) $title = $customTitle;
      else if ( is_front_page() ) $title = get_bloginfo( 'name' );
      else $title = get_bloginfo ( 'name' ) . wp_title ( '|', false );
   ?>
   <title><?php echo $title; ?></title>
   <?php 
      $page_description = get_post_meta ( get_the_ID(), "page_description", true );
      
      if ( !empty ( $page_description ) ) {
         echo '<meta name="Description" content="' . $page_description . '" />';
      }
   ?>
   <?php 
      $page_keywords = get_post_meta ( get_the_ID(), "page_keywords", true );
      
      if ( !empty ( $page_keywords ) ) {
         echo  '<meta name="keywords" content="' . $page_keywords . '" />';
      }
   ?>
   


   <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
   <?php wp_head(); ?>
   
   
   
</head>


<body>
   <div id="header-wrapper">
      <header id="page-header" class="constrained-to-mid">
         <a id="bear-link" href="http://www.joshuad.net/hi-i-em-flatnose/">
            <img alt="Cute Bear" id="header-bear" src="<?php bloginfo ( 'template_directory' ); ?>/images/header-bear2.png" />  
         </a>
         <a class="blog-name-link" href="<?php echo get_home_url();?>">
            <img alt="Josh" id="header-icon" src="<?php bloginfo ( 'template_directory' ); ?>/images/header-icon.jpg" width="150" height="150" />  
         </a>
         <h1 id="blog-name">
            <a class="blog-name-link" href="<?php echo get_home_url();?>">
               <?php bloginfo('name'); ?>
            </a>
         </h1>
         <?php 
            $tagline = get_bloginfo( 'description' );
            if ( ! empty ( $tagline ) ): 
         ?> 
               <h2 id="blog-tagline"><?php echo $tagline ?></h2>
         <?php endif ?>
         
         <div class="social-icons">
            <?php if ( false != get_theme_mod( 'jd2016_social_instagram')) { ?>
               <a class="icon-instagram" title="Instagram" target="_blank" href="<?php echo esc_url( get_theme_mod( 'jd2016_social_instagram') ); ?>">
                  <span class="hidden"><?php _e( 'Instagram', 'jd2016' ); ?></span>
               </a>
            <?php } ?>
            <?php if ( false != get_theme_mod( 'jd2016_social_google')) { ?>
               <a class="icon-google-plus" title="Google+" target="_blank" href="<?php echo esc_url( get_theme_mod( 'jd2016_social_google') ); ?>">
                  <span class="hidden"><?php _e( 'Google+', 'jd2016' ); ?></span>
               </a>
            <?php } ?>
            <?php if ( false != get_theme_mod( 'jd2016_social_facebook')) { ?>
               <a class="icon-facebook" title="Facebook"  target="_blank" href="<?php echo esc_url( get_theme_mod( 'jd2016_social_facebook') ); ?>">
                  <span class="hidden"><?php _e( 'Facebook', 'jd2016' ); ?></span>
               </a>
            <?php } ?>
            <?php if ( false != get_theme_mod( 'jd2016_social_github')) { ?>
               <a class="icon-github-alt" title="GitHub" target="_blank" href="<?php echo esc_url( get_theme_mod( 'jd2016_social_github') ); ?>">
                  <span class="hidden"><?php _e( 'GitHub', 'jd2016' ); ?></span>
               </a>
            <?php } ?>
            <?php if ( false != get_theme_mod( 'jd2016_social_stack_overflow')) { ?>
               <a class="icon-stack-overflow" title="Stack Overflow" target="_blank" href="<?php echo esc_url( get_theme_mod( 'jd2016_social_stack_overflow') ); ?>">
                  <span class="hidden"><?php _e( 'Stack Overflow', 'jd2016' ); ?></span>
               </a>
            <?php } ?>
            <?php if ( false != get_theme_mod( 'jd2016_social_stack_exchange')) { ?>
               <a class="icon-stack-exchange" title="Stack Exchange" target="_blank" href="<?php echo esc_url( get_theme_mod( 'jd2016_social_stack_exchange') ); ?>">
                  <span class="hidden"><?php _e( 'Stack Exchange', 'jd2016' ); ?></span>
               </a>
            <?php } ?>
            <?php if ( false != get_theme_mod( 'jd2016_social_soundcloud')) { ?>
               <a class="icon-soundcloud" title="Sound Cloud" target="_blank" href="<?php echo esc_url( get_theme_mod( 'jd2016_social_soundcloud') ); ?>">
                  <span class="hidden"><?php _e( 'SoundCloud', 'jd2016' ); ?></span>
               </a>
            <?php } ?>
            <?php if ( false != get_theme_mod( 'jd2016_social_lol')) { ?>
               <a class="icon-league-of-legends" title="League of Legends" target="_blank" href="<?php echo esc_url( get_theme_mod( 'jd2016_social_lol') ); ?>">
                  <span class="hidden"><?php _e( 'League of Legends', 'jd2016' ); ?></span>
               </a>
            <?php } ?>
            <?php if ( false != get_theme_mod( 'jd2016_social_quora')) { ?>
               <a class="icon-quora" title="Quora" target="_blank" href="<?php echo esc_url( get_theme_mod( 'jd2016_social_quora') ); ?>">
                  <span class="hidden"><?php _e( 'Quora', 'jd2016' ); ?></span>
               </a>
            <?php } ?>
            <?php if ( false != get_theme_mod( 'jd2016_social_dnd')) : ?>
               <a class="icon-dnd" title="D&D Character - Breeze the Bard" target="_blank" href="<?php echo esc_url( get_theme_mod( 'jd2016_social_dnd') ); ?>">
                  <span class="hidden"><?php _e( 'D&D', 'jd2016' ); ?></span>
               </a>
            <?php endif ?>
         </div>
      </header>
      <hr class="section-divide" />
   </div>
   <?php
      $defaults = array (
        'theme_location'  => 'primary_menu',
        'menu'            => 'Primary Menu',
        'container_class' => 'constrained-to-mid',
        'container_id'    => 'mainMenu',
        #'items_wrap' => '<ul>%3$s</ul>',
      );
      wp_nav_menu ( $defaults );
   ?>


   <div id="content" class='constrained-to-mid'>
