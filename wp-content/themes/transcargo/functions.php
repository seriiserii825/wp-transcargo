<?php 
require __DIR__ . '/inc/settings.php';
require __DIR__ . '/inc/load-scripts.php';
require __DIR__ . '/inc/helpers.php';
require __DIR__ . '/inc/widgets.php';

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

remove_filter('the_content', 'wpautop');

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

    
add_filter('widget_text', 'do_shortcode');

add_shortcode('recent_posts', 'recent_posts_cb');
function recent_posts_cb($atts){
    $recent_posts = new WP_Query(['post_type' => 'post', 'posts_per_page' => 4, 'post__not_in' => [164]]);

    $html .= '<div class="block">
                        <ul class="recent-post">';
        ?>
            <?php if ( $recent_posts->have_posts() ) : while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
                $html .= '<li class="recent-post__item">
                    <div class="img-wrap wow zoomIn">
                        '.get_the_post_thumbnail( $post->ID, [80, 80] ).'
                    </div>
                    <div class="recent-post__content">
                        <h5 class="recent-post__title">'.get_the_title().'</h5>
                        <time class="recent-post__time">'.transcargo_get_the_date().'</time>
                    </div>
                </li>';
                ?>
              <?php endwhile; ?>
              <!-- post navigation -->
              <?php else: ?>
              <!-- no posts found -->
            <?php endif; ?>
        <?
        $html .= '</ul></div>';
    return $html;
}



