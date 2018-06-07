<?php 
require __DIR__ . '/inc/settings.php';
require __DIR__ . '/inc/load-scripts.php';


add_filter( 'nav_menu_link_attributes', 'filter_function_name_3020', 10, 4 );
function filter_function_name_3020( $atts, $item, $args, $depth ){
    $img = $item->description;
    $link = $atts['href'];

    if ( $args->theme_location == 'index-menu' ) {
        $args->link_before = '
        <div class="main-item">
        <div class="img-wrap">
        <a href="'.$link.'">
        <div class="img-inner">
        <img src="'.$img.'" alt="img">
        </div>
        </a>
        </div>
        <h3 class="main-title">';
        $args->link_after = '</h3>
        <a href="'.$link.'" class="home-button button-red">View Page</a>';
    }

    return $atts;
}

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

register_nav_menus( [
    'index-menu' => 'Меню на главной',
    'header-menu' => 'Меню в шапке',
    'footer-menu' => 'Меню в футере'
] );

register_sidebar( [
    'name'          => 'Социальные иконки',
    'id'            => 'header-socials',
    'description'   => 'Добавьте социальные иконки через виджет html',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => ''
] );

