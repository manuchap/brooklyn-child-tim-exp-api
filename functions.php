<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

register_sidebar(array(
  'name'=> 'Search Hotel One',
  'id' => 'tim_exp_api_search_one'
));

register_sidebar(array(
  'name'=> 'Search Hotel Two',
  'id' => 'tim_exp_api_search_two'
));

register_sidebar(array(
  'name'=> 'Hotels List One',
  'id' => 'tim_exp_api_list_one'
));

register_sidebar(array(
  'name'=> 'Hotels List Two',
  'id' => 'tim_exp_api_list_two'
));