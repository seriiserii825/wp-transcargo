<?php 

add_action( 'wp_enqueue_scripts', 'transcargo_scripts' );
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

/**
 * Подключаем скрипты и стили
 * @return [type] [description]
 */
function transcargo_scripts() {
    //styles
    wp_enqueue_style( 'transcargo-fontawesome', get_template_directory_uri() . '/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css' );

    if(is_page('index')){
        wp_enqueue_style( 'transcargo-home', get_template_directory_uri() . '/assets/css/home.css' );
    }else{
        wp_enqueue_style( 'transcargo-header', get_template_directory_uri() . '/assets/header/header.css' );
        wp_enqueue_style( 'transcargo-style', get_template_directory_uri() . '/assets/css/style.css' );
    }

    //scripts
    wp_enqueue_script( 'transcargo-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
    wp_enqueue_script( 'transcargo-jquery-migrate', get_template_directory_uri() . '/assets/libs/jquery-migrate/jquery-migrate.min.js', ['transcargo-jquery'], false, true );
    wp_enqueue_script( 'transcargo-easyscroll', get_template_directory_uri() . '/assets/libs/jquery-easy-scroll/jquery.easeScroll.js', ['transcargo-jquery'], false, true );

    
    wp_enqueue_script( 'transcargo-stellar', get_template_directory_uri() . '/assets/libs/stellar.js/jquery.stellar.min.js', ['transcargo-jquery'], false, true );
    

    wp_enqueue_script( 'transcargo-slick', get_template_directory_uri() . '/assets/libs/slick/slick.min.js', ['transcargo-jquery'], false, true );
    wp_enqueue_script( 'transcargo-main', get_template_directory_uri() . '/assets/js/main.js', ['transcargo-jquery'], false, true );
}

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

register_nav_menus( [
    'index-menu' => 'Меню на главной',
    'header-menu' => 'Меню в шапке',
    'footer-menu' => 'Меню в футере'
] );
