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


add_action( 'woocommerce_after_shop_loop_item', 'bbloomer_echo_stock_variations_loop' );
    
function bbloomer_echo_stock_variations_loop(){
    global $product;
    if ( $product->get_type() == 'variable' ) {
        foreach ( $product->get_available_variations() as $key ) {
            $attr_string = array();
            foreach ( $key['attributes'] as $attr_name => $attr_value ) {
                $attr_string[] = $attr_value;
            }
            if ( $key['max_qty'] > 0 ) { 
              echo '<br/>' . implode( ', ', $attr_string ) . ': ' . $key['max_qty'] . ' in stock'; 
            } else { 
              echo '<br/>' . implode(', ', $attr_string ) . ': out of stock'; 
            }
        }
    }
}

?>