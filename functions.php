<?php

if(!function_exists('blog_setup')){
    function blog_setup(){

        add_theme_support('post-thumbnails');

        register_nav_menus([
            'main' => 'Menu du haut',
            'social' => 'Barre des réseaux sociaux'
        ]);

    }
}
add_action('after_setup_theme', 'blog_setup');

if(!function_exists('blog_script')){
    function blog_script(){

        wp_enqueue_style(
            'blog-vendor-style',
            get_theme_file_uri('public/css/vendors.css')
        );

        wp_enqueue_style(
            'blog-app-style',
            get_theme_file_uri('public/css/app.css')
        );

        wp_enqueue_script('blog-app-js',
        get_theme_file_uri('public/js/app.js'),
        [],
        '0.1.0');
    }
}
add_action('wp_enqueue_scripts', 'blog_script');

if(!function_exists('blog_register_sidebars')){
    function blog_register_sidebars(){

        register_sidebar(
            array(
            'name'          => 'main-sidebar',
            'id'            => 'sidebar-1',
            'description'   => 'Affichage de widget sur la gauche du site',
            'class'         => 'sidebar',
            'before_widget' => '<h2>',
            'after_widget'  => '</h2>'
        )
    );

    }
}
add_action('widgets_init', 'blog_register_sidebars');

// Controler la limit de excperpt

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).' [...]';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).' [...]';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}
