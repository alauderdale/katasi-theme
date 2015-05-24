<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.9.1.min.js" type="text/javascript"></script>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

  <?php if ( is_admin_bar_showing() ) { ?>

  <style type="text/css">
    .main-nav{
      top:32px;
    }
    html{
      margin-top:0!important;
    }
    body{
      padding-top: 32px;
    }
    #wpadminbar{
      position: fixed;
    }
  </style>


  <?php } ?>
  <nav class='sliding-menu slide-menu-right'>
    <button class='close-menu nav-toggler'>
      <i class='md md-close'></i>
    </button>
    <div class='clearfix'></div>
    <?php get_template_part( 'content', 'main_nav' ); ?>
  </nav>
  <div id='wrapper'>
    <nav class='main-nav navbar-fixed-top'>
      <div class='container'>
        <a class='navbar-brand' href='<?php bloginfo('url')?>'>
          <?php get_template_part( 'content', 'logo' ); ?>
        </a>
        <div class='pull-right hidden-lg hidden-md'>
          <button class='nav-toggler toggle-slide-right'>
            <span class='menu-text'>
              menu
            </span>
            <i class='md md-menu'></i>
          </button>
        </div>
        <div class='nav-links'>
          <?php get_template_part( 'content', 'main_nav' ); ?>
        </div>
      </div>
    </nav>
    <div class="main">