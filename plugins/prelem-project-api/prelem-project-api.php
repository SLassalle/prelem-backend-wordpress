<?php
/**
 * Plugin Name: Prelem Project API
 * Description: Custom plugin WordPress pour gérer les projets via l'API REST.
 * Author: Sébastien L
 * Version: 1.0.0
 */

function prelem_register_post_type_projet() {
  register_post_type('projet', [
    'label' => 'Projets',
    'public' => true,
    'show_in_rest' => true,
    'supports' => ['title', 'editor', 'thumbnail'],
    'menu_icon' => 'dashicons-portfolio'
  ]);
}
add_action('init', 'prelem_register_post_type_projet');