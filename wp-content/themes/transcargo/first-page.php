<?php 

/**
 * Template Name: Первая страница
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
</head>
<body>
    <!-- home-header -->
    <header class="home-header" data-stellar-background-ratio="0.2" id="js-home-header">
        <div class="header-center">
            <h1 class="home-title"><?php echo get_post_meta($post->ID, 'main-title', true); ?></h1>
            <a href="#" class="home-button">Purchase now</a>
        </div>
    </header>

    <!-- home-main -->
    <section class="home-main">
        <h2 class="main-title">Select a page</h2>

        <!-- navigation -->
        <div class="container">
            <div class="row">
                <?php wp_nav_menu( array(
                    'theme_location'  => 'index-menu',
                    'menu'            => '',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ) ); ?>
            </div>

        </div>
    </section>

    <!--home-buy-->
    <div class="home-buy">
        <a href="#" class="home-button">Buy it now</a>
    </div>

    <!--help-->
    <div class="home-help">
        <h3 class="home-help__title">Need help? get in touch</h3>
    </div>

    <!--support-->
    <div class="home-support">
        <a href="#" class="home-support__item"><i class="fa fa-book" aria-hidden="true"></i> Detailed documentation</a>
        <a href="#" class="home-support__item"><i class="fa fa-life-ring" aria-hidden="true"></i>Quick support</a>
    </div>

    <footer class="home-footer">
        <p class="home-footer-text">Created With <i class="fa fa-heart" aria-hidden="true"></i> by Templines &copy; 2015 All rights reserved.</p>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>

