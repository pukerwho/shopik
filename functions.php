<?php
include('inc/theme-settings.php');
// Add your theme support ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
function customThemeSupport() {
    global $wp_version;
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support('woocommerce');
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    // let wordpress manage the title
    add_theme_support( 'title-tag' );
    //add_theme_support( 'custom-background', $args );
    //add_theme_support( 'custom-header', $args );
    // Automatic feed links compatibility
    if( version_compare( $wp_version, '3.0', '>=' ) ) {
        add_theme_support( 'automatic-feed-links' );
    } else {
        automatic_feed_links();
    }
}
add_action( 'after_setup_theme', 'customThemeSupport' );

require_once get_template_directory() . '/inc/carbon-fields/carbon-fields-plugin.php';
require_once get_template_directory() . '/inc/custom-fields/term-meta.php';

// подключаем файлы со стилями
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
    wp_enqueue_style( 'editor-style', get_stylesheet_directory_uri() . '/css/style.css', false, time() );
    // wp_enqueue_script( 'animate-puk', get_template_directory_uri() . '/js/animate-puk.js','','',true);
    // wp_enqueue_script( 'device', get_template_directory_uri() . '/js/device.js','','',true);
    // wp_enqueue_script( 'lightslider', get_template_directory_uri() . '/js/lightslider.min.js','','',true);
    // wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js','','',true);
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', '','',true);
};

//Регистрация меню
register_nav_menus( array(
    'head_top_menu' => 'Меню в шапке (верхнее)',
    'head_bottom_menu' => 'Меню в шапке (нижнее)',
    'mobile_menu' => 'Мобильное меню',
) );

//Регистрация сайдбара
function true_register_wp_sidebars() {
 
  /* В боковой колонке - первый сайдбар */
  register_sidebar(
    array(
      'id' => 'true_side', // уникальный id
      'name' => 'Боковая колонка', // название сайдбара
      'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
      'before_widget' => '<div id="%1$s" class="side mb-6 widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
      'after_widget' => '</div>',
      'before_title' => '<h3 class="text-2xl mb-4 widget-title">', // по умолчанию заголовки виджетов в <h2>
      'after_title' => '</h3>'
    )
  );
}
add_action( 'widgets_init', 'true_register_wp_sidebars' );

function my_custom_upload_mimes($mimes = array()) {
    $mimes['svg'] = "image/svg+xml";
    return $mimes;
}

add_action('upload_mimes', 'my_custom_upload_mimes');

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

add_filter( 'woocommerce_checkout_fields', 'woo_remove_fields', 9999 );
 
function woo_remove_fields( $woo_checkout_fields_array ) {
 
  // she wanted me to leave these fields in checkout
  // unset( $woo_checkout_fields_array['billing']['billing_first_name'] );
  // unset( $woo_checkout_fields_array['billing']['billing_last_name'] );
  // unset( $woo_checkout_fields_array['billing']['billing_phone'] );
  // unset( $woo_checkout_fields_array['billing']['billing_email'] );
  // unset( $woo_checkout_fields_array['order']['order_comments'] ); // remove order notes
 
  // and to remove the billing fields below
  unset( $woo_checkout_fields_array['billing']['billing_company'] ); // remove company field
  unset( $woo_checkout_fields_array['billing']['billing_country'] );
  unset( $woo_checkout_fields_array['billing']['billing_address_1'] );
  unset( $woo_checkout_fields_array['billing']['billing_address_2'] );
  unset( $woo_checkout_fields_array['billing']['billing_city'] );
  unset( $woo_checkout_fields_array['billing']['billing_state'] ); // remove state field
  unset( $woo_checkout_fields_array['billing']['billing_postcode'] ); // remove zip code field
 
  return $woo_checkout_fields_array;
}

?>