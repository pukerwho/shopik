<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@700&display=swap" rel="stylesheet">


  <!-- <link rel="stylesheet" href="../css/style.css" inline> -->
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
  ?>
</head>
<body <?php echo body_class(); ?>>
  <section id="content" role="main">
    <header class="header py-4 md:py-3">
      <div class="container mx-auto px-3 lg:px-0">
        <?php get_template_part('blocks/header/header-top'); ?>
        <?php get_template_part('blocks/header/header-bottom'); ?>
        <?php get_template_part('blocks/header/header-mobile-cover'); ?>
      </div>
    </header>