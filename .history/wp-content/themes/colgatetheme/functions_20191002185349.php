<?php

function xigna_styles(){
    wp_enqueue_style('style',get_stylesheet_uri() );
    //wp_register_script( 'ajax', "http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js");
    wp_register_script('knob', get_template_directory_uri() . '/js/jquery.knob.min.js');
    wp_enqueue_script('knob');
}

add_action( 'wp_enqueue_scripts','xigna_styles')

?>