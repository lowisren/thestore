<?php
/**
* The Header for our theme.
*
* Displays all of the <head> section and everything up till <div id="main">
  *
  */
  ?>
  <!DOCTYPE html>
  <html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo('charset'); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
      <?php wp_head(); ?>
    </head>
    <body id="page-top" <?php body_class('index');?>  >
      <div class="overlayloader">
        <div class="loader">&nbsp;</div>
      </div>
      <div class="header"  id="header">
        <div class="container clearfix">
          <div id="logo">
            <?php oneline_lite_the_custom_logo(); 

            if(get_theme_mod('header_textcolor')!='blank'){ 

            if ( is_front_page() && is_home() ) : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php endif;
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo $description; ?></p>
            <?php endif;  } ?>
          </div>
          <div id="main-menu-wrapper">
            <a href="#" id="pull" class="toggle-mobile-menu"></a>
            <nav class="navigation clearfix mobile-menu-wrapper">
              <?php if ( is_page_template( 'home-template.php' ) ) :
              oneline_lite_nav_menu();
              else:
              oneline_lite_front_nav_menu();
              endif;
              ?>
            </nav>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>