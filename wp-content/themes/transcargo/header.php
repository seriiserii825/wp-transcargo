<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!--header-main-->
    <header class="main-header">

        <!-- header-top -->
        <div class="header-top">

            <div class="header-top__content"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>

                    <!-- info -->
                    <div class="col-md-6 col-xs-12">
                        <ul class="info">
                            <li class="info__item"><a href="#" class="info__link">Buy now</a></li>
                            <li class="info__item"><a href="#" class="info__link">Read documentation</a></li>
                            <li class="info__item"><a href="#" class="info__link">Why us</a></li>
                        </ul>
                    </div>

                    <!-- socials -->
                    <div class="col-md-3 col-xs-12">
                        <?php if(!dynamic_sidebar( 'header-socials' )): ?>
                            <h5 style="color: magenta;">Место для социальных иконок</h5>
                        <?php endif; ?>
                    </div><!-- socials -->

                </div>
            </div>
        </div><!-- header-top -->

        <!--  header-content  -->
        <div class="header-content">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <!-- logo -->
                        <div class="logo">
                            <div class="img-wrap">
                                <?php the_custom_logo(); ?>
                            </div>

                            <!-- logo-conten -->
                            <div class="logo-content">
                                <h2 class="logo-title">Trans <span class="accent">Cargo</span></h2>

                                <span class="logo-text">Well Maintained Logistics Services</span>
                            </div>
                        </div>
                    </div>

                    <!-- header-contact -->
                    <div class="col-md-9">
                        <div class="header-contacts">

                            <!--  phone  -->
                            <div class="header-contacts__item phone">
                                <div class="img-wrap">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>

                                <div class="block">
                                    <h5 class="contacts-title">Call us</h5>

                                    <span class="contacts-text"><?php echo get_option('transcargo_theme_options')['phone']; ?></span>
                                </div>
                            </div>

                            <!--  email  -->
                            <div class="header-contacts__item email">
                                <div class="img-wrap">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>

                                <div class="block">

                                    <h5 class="contacts-title">Email us</h5>

                                    <span class="contacts-text"><?php echo get_option('transcargo_theme_options')['email']; ?></span>

                                </div>
                            </div>

                            <!--  hours  -->
                            <div class="header-contacts__item hours">
                                <div class="img-wrap">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>

                                <div class="block">
                                    <h5 class="contacts-title">Work hours</h5>

                                    <span class="contacts-text"><?php echo get_option('transcargo_theme_options')['schedule']; ?></span>
                                </div>
                            </div>

                            <!--  basket  -->
                            <div class="header-contacts__item basket">
                                <div class="box box-left">
                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                </div>

                                <div class="box box-right">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>

                        </div><!--  header-contacts  -->
                    </div><!--  col-md-8  -->
                </div><!--  row  -->
            </div><!--  container  -->
        </div><!--  header-content  -->

        <!--  header-bottom  -->
        <div class="header-bottom">

            <div class="header-bottom__line"></div>

            <!--  header-navbar  -->
            <div class="header-navbar">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <span class="navbar-text">Menu</span>

                            <a href="#" class="navbar-button" id="js-navbar-button">
                                <div></div>
                                <div></div>
                                <div></div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="header-menu-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <!--  header-menu  -->
                            <?php wp_nav_menu( array(
                                'theme_location'  => 'header-menu',
                                'container'       => '',
                                'menu_class'      => 'header-menu',
                                'menu_id'         => 'js-header-menu',
                                'before'          => '',
                                'after'           => ''
                            ) ); ?>

                        </div>
                    </div>
                </div>
            </div>

        </div><!--  header-bottom  -->

    </header>
