<?php 
add_action( 'customize_register', 'customizer_init' );
add_action( 'customize_preview_init', 'customizer_js_file' );

function customizer_init( WP_Customize_Manager $wp_customize ){

  // как обновлять превью сайта:
  // 'refresh'     - перезагрузкой фрейма (можно полностью отказаться от JavaScript)
  // 'postMessage' - отправкой AJAX запроса
  $transport = 'refresh';

  // Первый экран
  if ( $section = 'first_screen' ) {

    $wp_customize->add_section( $section, [
      'title' => 'Первый экран',
      'priority'  => 200,
    ]);

    //Заголовок
    $setting = 'first_screen_title';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section'  => $section,
      'label'    => 'Заголовок',
      'type'     => 'text'
    ]);

    //Подзаголовок
    $setting = 'first_screen_subtitle';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section'  => $section,
      'label'    => 'Подзаголовок',
      'type'     => 'text'
    ]);

    //Описание
    $setting = 'first_screen_description';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section'  => $section, // id секции
      'label'    => 'Описание',
      'type'     => 'textarea' // текстовое поле
    ]);

    //Описание
    $setting = 'first_screen_img';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( 
      new WP_Customize_Image_Control( $wp_customize, $setting, [
        'label'    => 'Картинка',
        'settings' => $setting,
        'section'  => $section
      ] )
    );
  }

  // Блок О Нас
  if ( $section = 'block_about' ) {

    $wp_customize->add_section( $section, [
      'title' => 'Блок О Нас',
      'priority'  => 200,
    ]);

    //Заголовок
    $setting = 'about_main_page_text';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section'  => $section,
      'label'    => 'Текст для главной',
      'type'     => 'textarea'
    ]);
  }

  // Товар на главной
  if ( $section = 'block_about' ) {

    $wp_customize->add_section( $section, [
      'title' => 'Товар на Главной',
      'priority'  => 200,
    ]);

    //Категория #1
    $setting = 'product_cat_first';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section'  => $section,
      'label'    => 'Slug Категории #1',
      'type'     => 'text'
    ]);

    //Категория #2
    $setting = 'product_cat_second';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section'  => $section,
      'label'    => 'Slug Категории #2',
      'type'     => 'text'
    ]);

    //Категория #3
    $setting = 'product_cat_third';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section'  => $section,
      'label'    => 'Slug Категории #3',
      'type'     => 'text'
    ]);
  }

  // Блок Контакты
  if ( $section = 'block_contact' ) {

    $wp_customize->add_section( $section, [
      'title' => 'Контакты',
      'priority'  => 200,
    ]);

    //Адрес
    $setting = 'contact_address';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section'  => $section,
      'label'    => 'Адрес',
      'type'     => 'textarea'
    ]);

    //Email
    $setting = 'contact_email';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section'  => $section,
      'label'    => 'Email',
      'type'     => 'text'
    ]);

    //Телефон №1
    $setting = 'contact_phone_one';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section'  => $section,
      'label'    => 'Телефон №1',
      'type'     => 'text'
    ]);

    //Телефон №2
    $setting = 'contact_phone_two';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section'  => $section,
      'label'    => 'Телефон №2',
      'type'     => 'text'
    ]);

    //Телефон №3
    $setting = 'contact_phone_three';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section'  => $section,
      'label'    => 'Телефон №3',
      'type'     => 'text'
    ]);

    //Шорткод для обратного звонка
    $setting = 'contact_callback';
    $wp_customize->add_setting( $setting, [
      'default'   => '',
      'transport' => $transport
    ] );
    $wp_customize->add_control( $setting, [
      'section'  => $section,
      'label'    => 'Шорткод для обратного звонка',
      'type'     => 'text'
    ]);
  }

  // Секция
  if( $section = 'display_options' ){

    $wp_customize->add_section( $section, [
      'title'     => 'Отображение',
      'priority'  => 200,                   // приоритет расположения
      'description' => 'Внешний вид сайта', // описание не обязательное
    ] );

    // настройка
    $setting = 'display_header';

    $wp_customize->add_setting( $setting, [
      'default'    =>  'true',
      'transport'  =>  $transport
    ] );

    $wp_customize->add_control( $setting, [
      'section' => $section,
      'label'   => 'Отобразить заголовок?',
      'type'    => 'checkbox',
    ] );

    // настройка
    $setting = 'color_scheme';

    $wp_customize->add_setting( $setting, [
      'default'   => 'normal',
      'transport' => $transport
    ] );

    $wp_customize->add_control( $setting, [
      'section'  => $section,
      'label'    => 'Цветовая схема',
      'type'     => 'radio',
      'choices'  => [
        'normal'    => 'Светлая',
        'inverse'   => 'Темная',
      ]
    ] );

    // настройка
    $setting = 'font';

    $wp_customize->add_setting( $setting, [
      'default'   => 'arial',     // этот шрифт будет задействован по умолчанию
      'type'      => 'theme_mod', // использовать get_theme_mod() для получения настроек, если указать 'option', то нужно будет использовать функцию get_option()
      'transport' => $transport
    ] );

    $wp_customize->add_control( $setting, [
      'section'  => 'display_options', // секция
      'label'    => 'Шрифт',
      'type'     => 'select', // выпадающий список select
      'choices'  => [ // список значений и лейблов выпадающего списка в виде ассоциативного массива
        'arial'     => 'Arial',
        'courier'   => 'Courier New'
      ]
    ] );

    // настройка
    $setting = 'footer_copyright_text';

    $wp_customize->add_setting( $setting, [
      'default'            => 'Все права защищены',
      'sanitize_callback'  => 'sanitize_text_field',
      'transport'          => $transport
    ] );

    $wp_customize->add_control( $setting, [
      'section'  => 'display_options', // id секции
      'label'    => 'Копирайт',
      'type'     => 'text' // текстовое поле
    ] );

  }

  // секция
  if( $section = 'advanced_options' ){

    // Добавляем ещё одну секцию - Настройки фона
    $wp_customize->add_section( $section, [
      'title'    => 'Настройки фона',
      'priority' => 201,
    ] );

    // настройка
    $setting = 'bg_image';

    $wp_customize->add_setting( $setting, [
        'default'      => '', // по умолчанию - фоновое изображение не установлено
        'transport'    => $transport
      ]
    );

    $wp_customize->add_control(
      new WP_Customize_Image_Control( $wp_customize, $setting, [
        'label'    => 'Фон сайта',
        'settings' => 'bg_image',
        'section'  => 'advanced_options'
      ] )
    );

    // Добавим кнопку в дизайн сайта в кастомайзере для быстрого перехода к текущей настройке
    // при transport = postMessage здесь можно указать функцию,
    // которая будет заменять часть дизайна (таким образом можно не писать JS код)
    if ( isset( $wp_customize->selective_refresh ) ){

      $wp_customize->selective_refresh->add_partial( $setting, [
        'selector'            => '.site-footer .inner',
        'container_inclusive' => false,
        'render_callback'     => 'footer_inner_dh5theme',
        'fallback_refresh'    => false, // Prevents refresh loop when document does not contain .cta-wrap selector. This should be fixed in WP 4.7.
      ] );

      // поправим стиль, чтобы кнопку было видно
      add_action( 'wp_head', function(){
        echo '<style>.site-footer .inner .customize-partial-edit-shortcut{ margin: 10px 0 0 38px; }</style>';
      } );

    }

  }

}

function customizer_js_file(){
  wp_enqueue_script( 'theme-customizer', get_stylesheet_directory_uri() . '/js/theme-customizer.js', [ 'jquery', 'customize-preview' ], null, true );
}
?>