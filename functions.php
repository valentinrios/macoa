<?php
function macoa_script_enqueue(){

  wp_enqueue_style('macoastyle', get_template_directory_uri() . '/css/macoa.css', array(), '1.0.0', 'all');
  wp_enqueue_script('macoajs', get_template_directory_uri() . '/js/macoa.js', array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'macoa_script_enqueue');
