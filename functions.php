<?php

add_action('after_setup_theme', 'y_theme_support');

function y_theme_support()
{
    // Thêm tiêu đề động cho trang
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}


add_action('init', 'y_menus');

function y_menus()
{
    $locations = [
        'primary' => "NavBar",
        'footer' => "Footer Menu Items",
    ];

    register_nav_menus($locations);
}


add_action('wp_enqueue_scripts', 'y_register_styles');

function y_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('y-style', get_template_directory_uri() . "/style.css", array('y-bootstrap'), $version, 'all'); // array: ghi đè (override) y-bootstrap
    wp_enqueue_style('y-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2', 'all');
    wp_enqueue_style('y-bootstrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css", array(), '1.11.1', 'all');
    wp_enqueue_style('y-bootstrap-gg-font', "https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap", array(), '', 'all');
}


add_action('wp_enqueue_scripts', 'y_register_scripts');

function y_register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('y-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
    wp_enqueue_script('y-main', get_template_directory_uri() . "/assets/js/main.js", array('y-bootstrap'), $version, 'all');
    wp_enqueue_script('y-header', get_template_directory_uri() . "/assets/js/header.js", array('y-main'), $version, 'all');
    wp_enqueue_script('y-sidebar', get_template_directory_uri() . "/assets/js/sidebar.js", array('y-main'), $version, 'all');
    wp_enqueue_script('y-dark-theme', get_template_directory_uri() . "/assets/js/darkTheme.js", array('y-main'), $version, 'all');
}


add_action('widgets_init', 'y_widget_areas');

function y_widget_areas()
{
    register_sidebar(
        [
            'name' => 'Title Home Page Widget',
            'id' => 'home-page-title-widget',
            'description' => 'Widget Area',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
        ]
    );

    register_sidebar(
        [
            'name' => 'Header SideBar Widget',
            'id' => 'header-sidebar-widget',
            'description' => 'Widget Area',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
        ]
    );

    register_sidebar(
        [
            'name' => 'Footer Widget',
            'id' => 'footer-widget',
            'description' => 'Widget Area',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
        ]
    );
}


add_filter('comment_form_fields', 'add_custom_comment_fields_classes');

function add_custom_comment_fields_classes($fields)
{
    // $fields['comment'] = str_replace('textarea', 'textarea class="form-control"', $fields['comment']);
    // $fields['author'] = str_replace('input', 'input class="form-control"', $fields['author']);
    // $fields['email'] = str_replace('input', 'input class="form-control"', $fields['email']);
    // $fields['url'] = str_replace('input', 'input class="form-control"', $fields['url']);

    $fields['cookies'] = str_replace('<p class="comment-form-cookies-consent">', '<p class="comment-form-cookies-consent mb-4 form-check">', $fields['cookies']);
    $fields['cookies'] = str_replace('input', 'input class="form-check-input"', $fields['cookies']);
    $fields['cookies'] = str_replace('label', 'label class="form-check-label"', $fields['cookies']);

    return $fields;
}

function custom_tag_cloud_data($tags_data)
{
    foreach ($tags_data as $key => $tag) {
        $tags_data[$key]['name'] = '#' . $tag['name'];
    }
    return $tags_data;
}

add_filter('wp_generate_tag_cloud_data', 'custom_tag_cloud_data');


function has_child_category_by_name($category_name)
{
    // Lấy thông tin chuyên mục dựa trên tên
    $category = get_term_by('name', $category_name, 'category');

    if ($category) {
        // Lấy tất cả các chuyên mục con của chuyên mục có ID là $category->term_id
        $child_categories = get_term_children($category->term_id, 'category');

        // Kiểm tra xem có chuyên mục con hay không
        return $child_categories;
    }

    return false; // Trả về false nếu không tìm thấy chuyên mục với tên được cung cấp
}
