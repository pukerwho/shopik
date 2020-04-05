<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_term_options' );
function crb_term_options() {
  Container::make( 'term_meta', 'Options' )
    ->where( 'term_taxonomy', '=', 'pa_color' )
    ->add_fields( array(
    	Field::make( 'color', 'crb_pa_color_html', 'Выберете цвет' ),
    ) );
}

?>