<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Novel Office | Custom Software & Web Development Company</title>

<!-- Meta Description -->
<meta name="description" content="Novel Office is a results-driven software and web development company offering innovative digital solutions, custom apps, responsive websites, and scalable IT systems to empower your business online." />

<!-- Meta Keywords -->
<meta name="keywords" content="software development, web development, IT solutions, custom software, web design, mobile app development, Novel Office, responsive websites, digital transformation" />




<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>



  <!-- Header Top Strip -->
  <div class="top-strip">
  <marquee behavior="scroll" direction="left">
    💼 Novel Office offers cutting-edge software and web development services tailored to your business. &nbsp;&nbsp;&nbsp;
    🚀 New Full-Stack Web Development Weekend Batch Starts on 01st Aug – Enroll Now!
  </marquee>
</div>

<!-- Header -->
<header class="bg-white shadow-sm sticky-top">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand fw-bold text-success" href="<?php echo home_url(); ?>">
        <?php if (has_custom_logo()) {
          the_custom_logo();
        } else {
          bloginfo('name');
        } ?>
      </a>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="mainNavbar">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'container'      => false,
            'menu_class'     => 'navbar-nav ms-auto ',
            'fallback_cb'    => '__return_false',
            'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
            'depth'          => 1,
            'walker'            => new bootstrap_5_wp_nav_menu_walker()
          ));
        ?>
      </div>
    </div>
  </nav>
</header>
