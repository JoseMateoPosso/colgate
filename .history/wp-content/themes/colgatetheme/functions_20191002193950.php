<?php

function xigna_styles(){
    wp_enqueue_style('style',get_stylesheet_uri() );
    wp_register_script('knob', get_template_directory_uri() . '/assets/js/jquery.knob.min.js', array('jquery'), '1.9.0', true);
    wp_enqueue_script('knob');
    wp_enqueue_script( "bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" )
    wp_enqueue_script('index',get_template_directory_uri() . '/assets/js/index.js', true);
}

add_action( 'wp_enqueue_scripts','xigna_styles')

?>