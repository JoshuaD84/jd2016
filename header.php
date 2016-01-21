<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <title><?php bloginfo('name'); ?> <?php is_front_page() ? "" : wp_title('|'); ?></title>
   <link rel="profile" href="http://gmpg.org/xfn/11" />
   <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   <!--[if gte IE 9]><!-->
      <!--meta name="viewport" content="width=device-width, initial-scale=1"-->
      <link id="responsive-stylesheet" rel="stylesheet" title="default" href="<?php echo get_template_directory_uri();?>/style-responsive.css" type="text/css" media="screen" />
   <!--<![endif]-->
   <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
   <?php wp_head(); ?>
</head>
<body>
   <div id="header-wrapper">
      <header id="page-header" class="constrained-to-mid">
         <a id="bear-link" href="http://www.joshuad.net/hi-i-em-flatnose/">
            <img id="header-bear" src="<?php bloginfo ( 'template_directory' ); ?>/images/header-bear2.png" />  
         </a>
         <a id="blog-name-link" href="<?php echo get_home_url();?>">
            <img id="header-icon" src="<?php bloginfo ( 'template_directory' ); ?>/images/header-icon.jpg" width="150" height="150" />  
         </a>
         <h1 id="blog-name">
            <a id="blog-name-link" href="<?php echo get_home_url();?>">
               <?php bloginfo('name'); ?>
            </a>
         </h1>
         <h2 id="blog-tagline"><?php bloginfo('description'); ?></h2>
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
            <?php if ( false != get_theme_mod( 'jd2016_social_quora')) { ?>
               <a class="icon-quora" title="Quora" target="_blank" href="<?php echo esc_url( get_theme_mod( 'jd2016_social_quora') ); ?>">
                  <span class="hidden"><?php _e( 'Quora', 'jd2016' ); ?></span>
               </a>
            <?php } ?>
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
