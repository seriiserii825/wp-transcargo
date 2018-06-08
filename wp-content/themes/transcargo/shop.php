<?php 
/**
 * Template Name: Магазин
 */

get_header();

$term = get_queried_object();
$image = get_field('header_img', $term);
$title = get_the_title();
?>

<section class="page-header" style="background-image: url('<?php echo $image; ?>')">
    <div class="container">

        <!--page-header-->
        <div class="row">
            <div class="col-12">
                <h2 class="page-header__title title"><?php echo $title; ?></h2>
            </div>
        </div>
    </div>
</section>

<div class="main shop">
    <div class="container">
        <div class="shop-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="shop-content__item">
                        <h2 class="title">unique features reliability, punctuality & commitment</h2>
                        <p class="text">
                            Integer congue elit non semper laoreet sed lectus orcil posuer nisl tempor se felis
                            pelentesque
                            inyd urna. Integer vitae felis vel magna posu dul vestibulum. Nam rutrumc diam. Aliquam
                            males
                            uada maurs etulg metu Curabitur laoreet convallis nisal. Pellentes que bibendum. Cras
                            porttitor
                            Don cursus ante et vulputate feugiat mil justo faucibusn sd Integ elemen tuma volutpat
                            vestibulum enim mi tincidunt.
                        </p>

                        <p class="text">
                            Lorem ipsum dolor sit amet sed consectetur adipisicing elit sed do eiusmod tempor
                            incidanaut
                            labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation amco
                            laboris
                            nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shop-content__item">
                        <div class="img-wrap">
                            <img src="assets/i/shop/shop-content.png" alt="img">
                        </div>

                        <p class="text">
                            Sed mollis.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In a nulla. Vivamus
                            fringilla sed cipit mil In hac habitasse platea dictumst. Pellentesque justo. Vivamus quis
                            sapien. Etiam fring illatul Quisque consectetue. Integer conguel elit non semper laoreet sed
                            lectus.
                        </p>
                    </div>
                </div>
            </div>
        </div><!--shop-content-->

        <div class="features">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features__item wow flipInY" data-wow-delay=".4s">
                        <div class="img-wrap">
                            <img src="assets/i/shop/feature-1.jpg" alt="img">
                        </div>
                        <h2 class="title title__small">Safe &amp; secure delivery</h2>
                        <p class="text">
                            Integer congue, elit non semper laoreet sed lectus orci posuh nisl tempor lacus felis ac
                            mauris. Pellentesque in urna. Intege vitae felis vel magna posuere vestibulum.
                            Nam rutrum congue diam. Aliquam malesuada mauris et metus.
                        </p>
                        <div class="btn-wrap red">
                            <a href="#" class="btn">Read mored</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features__item wow flipInY" data-wow-delay=".5s">
                        <div class="img-wrap">
                            <img src="assets/i/shop/feature-2.jpg" alt="img">
                        </div>
                        <h2 class="title title__small">Fastest &amp; in-time</h2>
                        <p class="text">
                            Integer congue, elit non semper laoreet sed lectus orci posuh nisl tempor lacus felis ac
                            mauris. Pellentesque in urna. Intege vitae felis vel magna posuere vestibulum.
                            Nam rutrum congue diam. Aliquam malesuada mauris et metus.
                        </p>
                        <div class="btn-wrap red">
                            <a href="#" class="btn">Read mored</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features__item wow flipInY" data-wow-delay=".6s">
                        <div class="img-wrap">
                            <img src="assets/i/shop/feature-3.jpg" alt="img">
                        </div>
                        <h2 class="title title__small">Largest branches network</h2>
                        <p class="text">
                            Integer congue, elit non semper laoreet sed lectus orci posuh nisl tempor lacus felis ac
                            mauris. Pellentesque in urna. Intege vitae felis vel magna posuere vestibulum.
                            Nam rutrum congue diam. Aliquam malesuada mauris et metus.
                        </p>
                        <div class="btn-wrap red">
                            <a href="#" class="btn">Read mored</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--features-->

        <!--free-quote-->
        <div class="free-quote wow zoomInDown">
            <div class="row">
                <div class="col-12">
                    <div class="free-quote__outer">
                        <div class="free-quote__inner">
                            <div class="left-block">
                                <h3 class="title title__small">We provide fastest & affordable cargo services</h3>
                                <p class="free-quote__text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt
                                </p>
                            </div>
                            <div class="right-block">
                                <div class="btn-wrap white">
                                    <a href="#" class="btn">Request a free quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--free-quote-->

        <!--team-->
        <div class="team">
            <h2 class="title">Meet our team</h2>
            <h5 class="subtitle">Dedicated & professionals</h5>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="img-wrap wow flipInY" data-wow-delay=".3s">
                        <img src="assets/i/shop/team-1.png" alt="alt">
                    </div>
                    <p class="position">Cargo Expert</p>
                    <h4 class="title title__small">Emilie justina</h4>
                    <p>
                        Integer congue elit non semper laor lectus orci posuer tempor lacus sed elite nisal mauris led
                        ipsum.
                    </p>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="img-wrap wow flipInY" data-wow-delay=".4s">
                        <img src="assets/i/shop/team-2.jpg" alt="alt">
                    </div>

                    <p class="position">Shipment Deliver</p>

                    <h4 class="title title__small">Eric stephan</h4>

                    <p class="text">
                        Integer congue elit non semper laor lectus orci posuer tempor lacus sed elite nisal mauris led
                        ipsum.
                    </p>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="img-wrap wow flipInY" data-wow-delay=".5s">
                        <img src="assets/i/shop/team-3.jpg" alt="alt">
                    </div>
                    <p class="position">Office Manager</p>
                    <h4 class="title title__small">Hanna cindi</h4>
                    <p class="text">
                        Integer congue elit non semper laor lectus orci posuer tempor lacus sed elite nisal mauris led
                        ipsum.
                    </p>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="img-wrap wow flipInY" data-wow-delay=".6s">
                        <img src="assets/i/shop/team-4.jpg" alt="alt">
                    </div>
                    <p class="position">Shipment Deliver</p>
                    <h4 class="title title__small">John Miller</h4>
                    <p class="text">
                        Integer congue elit non semper laor lectus orci posuer tempor lacus sed elite nisal mauris led
                        ipsum.
                    </p>
                </div>
            </div>
        </div><!--team-->
    </div><!--container-->

    <!--fleets-gallery-->
    <div class="fleets-gallery section s_dark">
        <header class="fleets-gallery__header">
            <h2 class="title">The fleets gallery</h2>
            <h4 class="subtitle">We always use best &amp; fastest fleets</h4>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fleets-slider" id="js-fleets-gallery">
                        <div class="img-wrap">
                            <img src="assets/i/home/fleets-1.jpg" alt="slide">
                        </div>
                        <div class="img-wrap">
                            <img src="assets/i/home/fleets-2.JPG" alt="slide">
                        </div>
                        <div class="img-wrap">
                            <img src="assets/i/home/fleets-3.jpg" alt="slide">
                        </div>
                        <div class="img-wrap">
                            <img src="assets/i/home/fleets-4.jpg" alt="slide">
                        </div>
                        <div class="img-wrap">
                            <img src="assets/i/home/fleets-5.jpg" alt="slide">
                        </div>
                        <div class="img-wrap">
                            <img src="assets/i/home/fleets-6.jpg" alt="slide">
                        </div>
                        <div class="img-wrap">
                            <img src="assets/i/home/fleets-7.jpg" alt="slide">
                        </div>
                        <div class="img-wrap">
                            <img src="assets/i/home/fleets-8.jpg" alt="slide">
                        </div>
                        <div class="img-wrap">
                            <img src="assets/i/home/fleets-9.jpg" alt="slide">
                        </div>
                        <div class="img-wrap">
                            <img src="assets/i/home/fleets-10.jpg" alt="slide">
                        </div>
                        <div class="img-wrap">
                            <img src="assets/i/home/fleets-11.jpg" alt="slide">
                        </div>
                        <div class="img-wrap">
                            <img src="assets/i/home/fleets-12.jpg" alt="slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--fleets-gallery-->

    <!--ability-->
    <div class="ability section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="ability__item wow flipInX" data-wow-delay=".3s">
                        <div class="left-icon"><i class="fa fa-folder-open"></i></div>
                        <div class="ability__content">
                            <span class="number">230</span>
                            <span class="text">Projects Done</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ability__item wow flipInX" data-wow-delay=".4s">
                        <div class="left-icon"><i class="fa fa-users"></i></div>
                        <div class="ability__content">
                            <span class="number">68</span>
                            <span class="text">Clients Worldwide</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ability__item wow flipInX" data-wow-delay=".5s">
                        <div class="left-icon"><i class="fa fa-truck"></i></div>
                        <div class="ability__content">
                            <span class="number">147</span>
                            <span class="text">Owned Vehicles</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ability__item wow flipInX" data-wow-delay=".6s">
                        <div class="left-icon"><i class="fa fa-user"></i></div>
                        <div class="ability__content">
                            <span class="number">105</span>
                            <span class="text">People In Team</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--ability-->

</div><!--  main  -->

<? get_footer(); ?>