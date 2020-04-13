<div class="header_bottom flex items-center justify-between">
  <div class="header_left">
    <div class="logo flex">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/shopik-logo-4.svg" alt="" width="40px" class="mr-4">
      <a href="<?php echo home_url(); ?>" class="leading-loose">Shopik</a>
    </div>
  </div>
  <div class="header_right flex items-center">
    <div class="hidden lg:block">
      <?php wp_nav_menu([
        'theme_location' => 'head_bottom_menu',
        'menu_id' => 'head_menu',
        'menu_class' => 'flex items-center mr-8',
        'add_li_class'  => 'mr-6'
      ]); ?>
    </div>
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
  <div class="flex lg:hidden header_mobile_menu">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>