<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>

	<!-- Montserrat - google Font -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img class="logo" src="/wp-content/themes/Manpower/img/mp-eci-logo.png" alt="Manpower East Central Indiana logo"></a>
    </div>

    

    <!-- Main Navigation -->
    <div class="collapse navbar-collapse" id="navbar">
      <!-- Top Bar -->
      <div class="top">
        <ul>
          <li><a href="#"><img src="/wp-content/themes/Manpower/img/facebook.jpg" alt=""></a></li>
          <li><a href="#"><img src="/wp-content/themes/Manpower/img/twitter.jpg" alt=""></a></li>
          <li><a href="#"><img src="/wp-content/themes/Manpower/img/youtube.jpg" alt=""></a></li>
          <li class="top-phone"><img src="/wp-content/themes/Manpower/img/phone.jpg" alt=""><p>(765) 962-1511</p></li>
          <li><a href="#"><img src="/wp-content/themes/Manpower/img/email-icon.jpg" alt=""></a></li>
          <li><a href="<?php echo get_page_link(24); ?>" title="E-Connect Portal">E-Connect</a></li>
        </ul>
      </div>

        <?php
          wp_nav_menu( array(
            'theme_location'    => 'navbar-right',
            'depth'             => 2,
            'menu_class'        => 'nav navbar-nav navbar-right',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
          );
        ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
  
<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar, 
then you probably don't require a site title. Alternatively you can use the example below. 
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
