<?php

function xigna_styles(){
    wp_enqueue_style('style',get_stylesheet_uri() );
    wp_enqueue_script('knob',get_stylesheet_uri )
    wp_register_script('customscripts', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('customscripts');
}

add_action( 'wp_enqueue_scripts','xigna_styles')

?>