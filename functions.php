<?php

function university_files() {
  wp_enqueue_style('university_main_styles', get_theme_file_uri());
}

add_filter('show_admin_bar', '__return_false');
add_action('wp_enqueue_scripts', 'university_files');
