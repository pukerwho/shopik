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
    <header class="header py-4 md:py-8">
      <div class="container mx-auto px-6 lg:px-0">
        <div class="header_content flex items-center justify-between">
          <div class="header_left">
            <div class="logo flex">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/shopik-logo-4.svg" alt="" width="40px" class="mr-4">
              <a href="<?php echo home_url(); ?>" class="leading-loose">Shopik</a>
            </div>
          </div>
          <div class="header_right">
            <a href="<?php echo wc_get_page_permalink( 'cart' ); ?>"><span class="cart_bug hidden lg:block uppercase mr-6">Корзина</span>
              <span >
                <?php 
                  global $woocommerce;
                  $count = $woocommerce->cart->cart_contents_count;
                  echo '<span class="cart-count">';
                  echo $count;
                  echo '</span>';
                ?>
              </span>
            </a>
          </div>
        </div>
      </div>
    </header>