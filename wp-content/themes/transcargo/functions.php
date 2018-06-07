<?php 
require __DIR__ . '/inc/settings.php';
require __DIR__ . '/inc/load-scripts.php';

add_action('init', 'register_post_types');
function register_post_types(){
    register_post_type('slider_home', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Слайдер', // основное название для типа записи
            'singular_name'      => 'Слайд', // название для одной записи этого типа
            'add_new'            => 'Добавить слайд', // для добавления новой записи
            'add_new_item'       => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
            'new_item'           => 'Новый слайд', // текст новой записи
            'view_item'          => 'Смотреть слайд', // для просмотра записи этого типа.
            'search_items'       => 'Искать слайд', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Слайдер', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'supports'            => array('title','editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ) );
}

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
add_theme_support( 'custom-logo' );

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

register_sidebar( [
    'name'          => 'Зеленый блок',
    'id'            => 'green-block',
    'description'   => 'Добавьте социальные иконки через виджет html',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => ''
] );

add_shortcode( 'fleets_gallery', 'fleets_gallery_cb' );
function fleets_gallery_cb($atts){
    $img_id = explode(',', $atts['ids']);
    
        foreach ($img_id as $id) {
            $html .= '<div class="img-wrap">';
                $img = wp_get_attachment_image( $id, 'full' );
                $html .= $img;
            $html .= '</div>';
        }

    return $html;
}



