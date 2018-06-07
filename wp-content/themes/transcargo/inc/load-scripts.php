<?php 

add_action( 'wp_enqueue_scripts', 'transcargo_scripts' );

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