<?php 
/**
 * Template Name: Домашняя страница
 */

?>
<?php get_header(); ?>

<div class="main home">

    <?php $slider_home = new WP_Query(['post_type' => 'slider_home', 'posts_per_page' => -1]);  ?>
    
    <?php if ( $slider_home->have_posts() ) : ?> 
        <div class="home-slider" id="js-home-slider">
          <?php while ( $slider_home->have_posts() ) : $slider_home->the_post(); ?>
            <div class="home-slider__item">

                <div class="img-wrap">
                    <?php the_post_thumbnail( 'full'); ?>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!--  caption  -->
                            <div class="caption">

                                <h2 class="slider-title"><?php the_title(); ?></h2>

                                <p class="slider-text">
                                    <?php the_content(); ?>
                                </p>

                                <div class="btn-wrap">
                                    <a href="#" class="btn btn__green">Learn more</a>
                                </div>

                            </div><!--  caption  -->
                        </div><!--  col-md-12  -->
                    </div><!--  row  -->
                </div><!--  container  -->

            </div>        
        <?php endwhile; ?>
    </div>
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>



<!--delivery-->
<div class="delivery section">
    <div class="container">
        <div class="row">

            <div class="col-md-4">

                <div class="img img-wrap wow flipInX" >
                    <img src="<?php bloginfo('template_url'); ?>/assets/i/home/delivery-1.jpg" alt="img">
                </div>

                <h3 class="title title__small">Safe &amp; secure delivery</h3>
                <p class="delivery__text">
                    Integer congue, elit non semper laoreet sed lectus orci posuh nisl tempor lacus felis ac mauris.
                    Pellentesque in urna. Intege vitae felis vel magna posuere vestibulum.
                    Nam rutrum congue diam. Aliquam malesuada mauris et metus.
                </p>

                <div class="btn-wrap red">
                    <a href="#" class="btn wow slideInUp">Read more</a>
                </div>

            </div>

            <div class="col-md-4">

                <div class="img img-wrap wow flipInX">
                    <img src="<?php bloginfo('template_url'); ?>/assets/i/home/delivery-2.jpg" alt="img">
                </div>

                <h3 class="title title__small">Fastest & in-time</h3>

                <p class="delivery__text">
                    Integer congue, elit non semper laoreet sed lectus orci posuh nisl tempor lacus felis ac mauris.
                    Pellentesque in urna. Intege vitae felis vel magna posuere vestibulum.
                    Nam rutrum congue diam. Aliquam malesuada mauris et metus.
                </p>

                <div class="btn-wrap red">
                    <a href="#" class="btn wow slideInUp">Read more</a>
                </div>

            </div>

            <div class="col-md-4">

                <div class="img img-wrap wow flipInX">
                    <img src="<?php bloginfo('template_url'); ?>/assets/i/home/delivery-3.jpg" alt="img">
                </div>

                <h3 class="title title__small">Largest branches network</h3>

                <p class="delivery__text">
                    Integer congue, elit non semper laoreet sed lectus orci posuh nisl tempor lacus felis ac mauris.
                    Pellentesque in urna. Intege vitae felis vel magna posuere vestibulum.
                    Nam rutrum congue diam. Aliquam malesuada mauris et metus.
                </p>

                <div class="btn-wrap red">
                    <a href="#" class="btn wow slideInUp">Read more</a>
                </div>

            </div>

        </div>
    </div>
</div><!--deliver-->

<!--free-quote-->
<div class="free-quote wow zoomIn">
    <div class="container">
        <div class="row">
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

<!--home-services-->
<div class="home-services section">
    <div class="home-services__header">
        <h2 class="title">Ours Services</h2>
        <h4 class="subtitle">
            We have wide network of offices in all major locations to help you with the services we offer
        </h4>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 wow flipInY" data-wow-delay=".8s">
                <div class="home-services__item">
                    <div class="left-icon">
                        <span class="icon-ship"></span>
                    </div>
                    <div class="home-services__content">
                        <h4 class="title title__small">Sea freight</h4>
                        <p class="home-services__text">
                            Integer congue elit non semper laorelectus orci posuer nisl tempor lacus mauris led
                            ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow flipInY" data-wow-delay=".4s">
                <div class="home-services__item">
                    <div class="left-icon red">
                        <span class="icon-road"></span>
                    </div>
                    <div class="home-services__content">
                        <h4 class="title title__small">Road transportation</h4>
                        <p class="home-services__text">
                            Integer congue elit non semper laorelectus orci posuer nisl tempor lacus mauris led
                            ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow flipInY" data-wow-delay=".1s">
                <div class="home-services__item">
                    <div class="left-icon">
                        <span class="icon-plane"></span>
                    </div>
                    <div class="home-services__content">
                        <h4 class="title title__small">Air freight</h4>
                        <p class="home-services__text">
                            Integer congue elit non semper laorelectus orci posuer nisl tempor lacus mauris led
                            ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow flipInY" data-wow-delay=".8s">
                <div class="home-services__item">
                    <div class="left-icon">
                        <span class="icon-train"></span>
                    </div>
                    <div class="home-services__content">
                        <h4 class="title title__small">Railway logistics</h4>
                        <p class="home-services__text">
                            Integer congue elit non semper laorelectus orci posuer nisl tempor lacus mauris led
                            ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow flipInY" data-wow-delay=".4s">
                <div class="home-services__item">
                    <div class="left-icon">
                        <span class="icon-cube-1"></span>
                    </div>
                    <div class="home-services__content">
                        <h4 class="title title__small">Packaging &amp; storage</h4>
                        <p class="home-services__text">
                            Integer congue elit non semper laorelectus orci posuer nisl tempor lacus mauris led
                            ipsum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow flipInY" data-wow-delay=".1s">
                <div class="home-services__item">
                    <div class="left-icon">
                        <span class="icon-garage"></span>
                    </div>
                    <div class="home-services__content">
                        <h4 class="title title__small">Warehousing</h4>
                        <p class="home-services__text">
                            Integer congue elit non semper laorelectus orci posuer nisl tempor lacus mauris led
                            ipsum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!--home-services-->

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
                        <img src="<?php bloginfo('template_url'); ?>/assets/i/home/fleets-1.jpg" alt="slide">
                    </div>
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/i/home/fleets-2.JPG" alt="slide">
                    </div>
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/i/home/fleets-3.jpg" alt="slide">
                    </div>
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/i/home/fleets-4.jpg" alt="slide">
                    </div>
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/i/home/fleets-5.jpg" alt="slide">
                    </div>
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/i/home/fleets-6.jpg" alt="slide">
                    </div>
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/i/home/fleets-7.jpg" alt="slide">
                    </div>
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/i/home/fleets-8.jpg" alt="slide">
                    </div>
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/i/home/fleets-9.jpg" alt="slide">
                    </div>
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/i/home/fleets-10.jpg" alt="slide">
                    </div>
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/i/home/fleets-11.jpg" alt="slide">
                    </div>
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/i/home/fleets-12.jpg" alt="slide">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!--fleets-gallery-->

<!--why-us-->
<div class="why-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <header class="why-us__header">
                    <h2 class="title">Trusted clients</h2>
                    <h4 class="subtitle">Lorem ipsum dolor sit amet consectetur</h4>
                </header>

                <div class="why-us-slider" id="js-why-us-slider">
                    <div class="why-us-slider__item">
                        <div class="why-us-slider__content">
                            <div class="left-icon">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p class="why-us-slider__text">
                                Integer congue elit non semper laoreet sed lectus orci posuer nisl tempor se felis
                                ac mauris. Pelentesque inyd urna. Integer vitae felis vel magna posu du vestibulum.
                                Nam rutrum congue diam. Aliquam malesuada maurs etug met Curabitur laoreet convallis
                                nisal pellentesque bibendum.
                            </p>
                        </div>

                        <div class="caption">
                            <h4 class="title title__small">Joe Davon</h4>
                            <p class="caption__description">Manager</p>
                        </div>
                    </div>

                    <div class="why-us-slider__item">
                        <div class="left-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <p class="why-us-slider__text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias commodi debitis dolor,
                            ducimus eligendi eos excepturi ipsum iusto laboriosam nemo nobis perspiciatis quasi
                            suscipit vel voluptate. Aliquid eos neque vero!
                        </p>

                        <div class="caption">
                            <h4 class="title title__small">Rebbeca Laurain</h4>
                            <p class="caption__description">Designer</p>
                        </div>
                    </div>

                    <div class="why-us-slider__item">
                        <div class="left-icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <p class="why-us-slider__text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore porro similique ullam.
                            At blanditiis commodi consequuntur eos ipsum neque nesciunt omnis quibusdam repellendus,
                            repudiandae saepe.
                        </p>

                        <div class="caption">
                            <h4 class="title title__small">Thomas Edison</h4>
                            <p class="caption__description">Php</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-6">
                <header class="why-us__header">
                    <h2 class="title">Why choose us</h2>
                    <h4 class="subtitle">Lorem ipsum dolor sit amet consectetur</h4>
                </header>

                <div class="accordeon" id="js-accordeon">
                    <div class="accordeon__item wow flipInY" data-wow-delay=".8s">
                        <a href="#question-1" class="accordeon-title js-accordeon-title">
                            Dui ac hendrerit elementum quam ipsum auctor lorem
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                        <div class="accordeon-content js-accordeon-content" id="question-1">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt blanditiis quam
                                ullam distinctio aliquid, ad aspernatur temporibus quis labore, est quidem
                                voluptatum. Asperiores similique totam veritatis inventore velit distinctio, ullam!
                            </p>
                        </div>
                    </div>

                    <div class="accordeon__item wow flipInY" data-wow-delay=".6s">
                        <a href="#question-2" class="accordeon-title js-accordeon-title">
                            Nulla scelerisque dul hendrerit elementum quam
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                        <div class="accordeon-content js-accordeon-content" id="question-2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt blanditiis quam
                                ullam distinctio aliquid, ad aspernatur temporibus quis labore, est quidem
                                voluptatum. Asperiores similique totam veritatis inventore velit distinctio, ullam!
                            </p>
                        </div>
                    </div>

                    <div class="accordeon__item wow flipInY" data-wow-delay=".4s">
                        <a href="#question-3" class="accordeon-title js-accordeon-title">
                            Mauris vel magna a est lobortis volutpat
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                        <div class="accordeon-content js-accordeon-content" id="question-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt blanditiis quam
                                ullam distinctio aliquid, ad aspernatur temporibus quis labore, est quidem
                                voluptatum. Asperiores similique totam veritatis inventore velit distinctio, ullam!
                            </p>
                        </div>
                    </div>

                    <div class="accordeon__item wow flipInY" data-wow-delay=".2s">
                        <a href="#question-4" class="accordeon-title js-accordeon-title">
                            Sed bibendum ornare lorem mauris feugiat suspendisse neque
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                        <div class="accordeon-content js-accordeon-content" id="question-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt blanditiis quam
                                ullam distinctio aliquid, ad aspernatur temporibus quis labore, est quidem
                                voluptatum. Asperiores similique totam veritatis inventore velit distinctio, ullam!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--why-us-->

<!--ability-->
<div class="ability section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="ability__item wow flipInY">
                    <div class="left-icon"><i class="fa fa-folder-open"></i></div>
                    <div class="ability__content">
                        <span class="number">230</span>
                        <span class="text">Projects Done</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ability__item wow flipInY">
                    <div class="left-icon"><i class="fa fa-users"></i></div>
                    <div class="ability__content">
                        <span class="number">68</span>
                        <span class="text">Clients Worldwide</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ability__item wow flipInY">
                    <div class="left-icon"><i class="fa fa-truck"></i></div>
                    <div class="ability__content">
                        <span class="number">147</span>
                        <span class="text">Owned Vehicles</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ability__item wow flipInY">
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

<!--latest-news-->
<div class="latest-news section s_dark">
    <div class="container">
        <!--latest-news__header-->
        <div class="row">
            <div class="col-12">
                <header class="latest-news__header">
                    <div class="latest-news__header-content">
                        <h2 class="title">Latest News</h2>
                        <h4 class="subtitle">Read our latest blog news</h4>
                    </div>

                    <div class="btn-wrap red">
                        <a href="#" class="btn">Read all news</a>
                    </div>
                </header>
            </div>
        </div>

        <!--latest-news__content-->
        <div class="row">
            <div class="col-lg-6">
                <div class="big-news">
                    <div class="img-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/i/home/big-news.jpg" alt="img">
                    </div>
                    <div class="big-news__content">
                        <h5 class="big-news__title">Duis vel tellus vitae ante tincidunt tincidun</h5>
                        <div class="big-news__data">
                            <div class="big-news__data-item">By john deo</div>
                            <time class="big-news__data-item">Jun 29, 2015</time>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="small-news-wrap">
                    <div class="small-news__item">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="img-wrap">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/i/home/big-news-2.jpg" alt="img">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="big-news__content">
                                    <h5 class="big-news__title">Neque rutrum quis pro nine velit sed ipsum</h5>
                                    <div class="big-news__data">
                                        <div class="big-news__data-item">By john deo</div>
                                        <time class="big-news__data-item">Jun 29, 2015</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="small-news__item">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="img-wrap">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/i/home/big-news-3.jpg" alt="img">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="big-news__content">
                                    <h5 class="big-news__title">Neque rutrum quis pro nine velit sed ipsum</h5>
                                    <div class="big-news__data">
                                        <div class="big-news__data-item">By john deo</div>
                                        <time class="big-news__data-item">Jun 29, 2015</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--latest-news-->

<!--partners-->
<div class="partners section">
    <div class="container">
        <header class="partners__header">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Trusted Partners</h2>
                    <p class="subtitle">
                        Lorem ipsum dolor sit amet consectetur
                    </p>
                </div>
            </div>
        </header>

        <div class="partners__content">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="partners__item wow rotateInUpLeft">
                        <a href="#" class="icon">
                            <span class="icon-partners-1-1"><span class="path1"></span><span class="path2"></span><span
                            class="path3"></span></span>
                        </a>

                        <a href="#" class="icon">
                            <span class="icon-partners-1-2"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="partners__item wow rotateInUpLeft">
                        <a href="#" class="icon">
                            <span class="icon-partners-2-1"><span class="path1"></span><span class="path2"></span><span
                            class="path3"></span><span class="path4"></span></span>
                        </a>

                        <a href="#" class="icon">
                            <span class="icon-partners-2-2"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="partners__item wow rotateInUpLeft">
                        <a href="#" class="icon">
                            <span class="icon-partners-3-1"><span class="path1"></span><span class="path2"></span></span>
                        </a>
                        <a href="#" class="icon">
                            <span class="icon-partners-3-2"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="partners__item wow rotateInUpLeft">
                        <a href="#" class="icon">
                            <span class="icon-partners-4-1"><span class="path1"></span><span class="path2"></span><span
                            class="path3"></span></span>
                        </a>
                        <a href="#" class="icon">
                            <span class="icon-partners-4-2"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end-partners-->

</div><!--  main  -->

<?php get_footer(); ?>