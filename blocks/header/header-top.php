<div class="header_top flex items-center justify-between mb-6">
  <div class="hidden lg:flex items-center text-sm">
    <?php echo esc_html( date_i18n( get_option( 'date_format' ) ) ); ?>
  </div>
  <div class="w-full lg:w-auto flex items-center justify-between text-sm">
    <div class="header_phones mr-4">
      <div class="flex items-center mr-4">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/phone.svg" alt="" width="15px" class="mr-2 mt-1 opacity-75">
        <a href="tel:<?php echo get_theme_mod( 'contact_phone_life' ); ?>" class="mt-1 mr-2">
          <?php echo get_theme_mod( 'contact_phone_life' ); ?>
        </a>
        <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow-down.svg" alt="" width="12px" style="transform: rotate(90deg); margin-top: 0.25rem;">
      </div>
      <div class="header_phones_sub py-2">
        <div class="flex items-center justify-center py-1">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/lifecell.svg" alt="" width="20px" class="mr-2 opacity-75">
          <a href="tel:<?php echo get_theme_mod( 'contact_phone_life' ); ?>">
            <?php echo get_theme_mod( 'contact_phone_life' ); ?>
          </a>
        </div>
        <div class="flex items-center justify-center py-1">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/vodafone.svg" alt="" width="20px" class="mr-2 opacity-75">
          <a href="tel:<?php echo get_theme_mod( 'contact_phone_vodafon' ); ?>">
            <?php echo get_theme_mod( 'contact_phone_vodafon' ); ?>
          </a>
        </div>
        <div class="flex items-center justify-center py-1">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/kyivstar.svg" alt="" width="20px" class="mr-2 opacity-75">
          <a href="tel:<?php echo get_theme_mod( 'contact_phone_kyivstar' ); ?>">
            <?php echo get_theme_mod( 'contact_phone_kyivstar' ); ?>
          </a>
        </div>
      </div>
    </div>
    <div class="hidden lg:block mr-4">
      <div class="flex items-center mr-4">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/mail.svg" alt="" width="15px" class="mr-2 mt-1 opacity-75">
        <a href="mailto:<?php echo get_theme_mod( 'contact_email' ); ?>" class="mt-1">
          <?php echo get_theme_mod( 'contact_email' ); ?>
        </a>
      </div>
    </div>
    <div class="flex items-center">
      <div class="mr-2">
        <a href="<?php echo get_theme_mod( 'contact_instagram' ); ?>" target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="" width="25px;">
        </a>
      </div>
      <div>
        <a href="<?php echo get_theme_mod( 'contact_instagram' ); ?>" target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="" width="25px;">
        </a>
      </div>  
    </div>
  </div>
</div>