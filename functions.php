<?php

function wpdocs_123Century_scripts()
{
    // wp_enqueue_style('styleshet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('styleshet', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'wpdocs_123Century_scripts');