<?php
add_action('wp_ajax_get_handbook', 'get_handbook_content');
add_action('wp_ajax_nopriv_get_handbook', 'get_handbook_content');

function get_handbook_content() {
    $response = array(
        'title' => 'SO BRIGHT 手不盲',
        'content' => "「SO BRIGHT」是愛盲基金會事業體系所經營的公益品牌，象徵身心障礙者透過自己的雙手，打造光明的未來。\n\n我們的核心產品包括冷製手工皂、養生果乾及堅果、五穀雜糧與烘焙點心等生活必需品，從製作到包裝都由庇護性員工與身心障礙者一手包辦完成。",
        'image_url' => get_theme_file_uri('/images/blind.png')
    );
    
    wp_send_json($response);
}

function enqueue_handbook_scripts() {
    wp_enqueue_style('handbook-styles', get_theme_file_uri('/css/handbook-modal.css'));
    wp_enqueue_script('handbook-script', get_theme_file_uri('/js/handbook-modal.js'), array('jquery'), '1.0', true);
    wp_localize_script('handbook-script', 'handbookAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_handbook_scripts');