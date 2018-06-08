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
      <h2>Добавьте слайды из админки</h2>
    <?php endif; ?>



    <?php include __DIR__ . '/inc/features.php'; ?>


    <?php if(!dynamic_sidebar( 'green-block' )): ?>
        <div class="container">
            <div class="row">
                <h2 style="color: red;">Grren Block</h2>
            </div>
        </div>
    <?php endif; ?>

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
                <?php $our_services_posts = new WP_Query(['category_name' => 'our-services']); ?>

                <?php if ( $our_services_posts->have_posts() ) : while ( $our_services_posts->have_posts() ) : $our_services_posts->the_post(); ?>
                    <?php $meta = get_post_meta($post->ID, 'our-services-icon', true);?>

                    <div class="col-lg-4 col-md-6 wow flipInY" data-wow-delay=".8s">
                        <div class="home-services__item">
                            <div class="left-icon">
                                <span class="<?php echo $meta; ?>"></span>
                            </div>
                            <div class="home-services__content">
                                <h4 class="title title__small"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <p class="home-services__text">
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- post navigation -->
                <?php else: ?>
                  Записи из категории Our-services
              <?php endif; ?>
            </div>
        </div>
    </div><!--home-services-->

    <?php include __DIR__.'/inc/fleets-gallery.php'; ?>

    <!--why-us-->
    <div class="why-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <header class="why-us__header">
                        <h2 class="title">Trusted clients</h2>
                        <h4 class="subtitle">Lorem ipsum dolor sit amet consectetur</h4>
                    </header>

                    <?php $trusted_clients = new WP_Query(['category_name' => 'trusted-clients', 'posts_per_page' => -1]); ?>

                    <?php if ( $trusted_clients->have_posts() ) : ?> 
                        <div class="why-us-slider" id="js-why-us-slider">

                          <?php while ( $trusted_clients->have_posts() ) : $trusted_clients->the_post(); ?>
                            <div class="why-us-slider__item">
                                <div class="why-us-slider__content">
                                    <div class="left-icon">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <?php the_content(); ?>
                                </div>

                                <div class="caption">
                                    <h4 class="title title__small"><?php the_title(); ?></h4>
                                    <p class="caption__description"><?php echo get_post_meta($post->ID, 'trusted-clients-job', true); ?></p>
                                </div>
                            </div>   
                            <?php endwhile; ?>
                        </div>
                    <?php else: ?>
                        <!-- no posts found -->
                    <?php endif; ?>

                </div>

                <div class="col-lg-6">
                    <header class="why-us__header">
                        <h2 class="title">Why choose us</h2>
                        <h4 class="subtitle">Lorem ipsum dolor sit amet consectetur</h4>
                    </header>

                    <?php $why_us_posts = new WP_Query(['category_name' => 'why-us', 'posts_per_page' => 4]); ?>

                    <?php if ( $why_us_posts->have_posts() ) : ?> 
                      <div class="accordeon" id="js-accordeon">
                          <?php while ( $why_us_posts->have_posts() ) : $why_us_posts->the_post(); ?>
                                 <div class="accordeon__item wow flipInY" data-wow-delay=".8s">
                                    <a href="#question-<?php echo $post->ID; ?>" class="accordeon-title js-accordeon-title">
                                        <?php the_title(); ?>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                    <div class="accordeon-content js-accordeon-content" id="question-<?php echo $post->ID; ?>">
                                        <?php the_content(); ?>
                                    </div>
                                </div>   
                            <?php endwhile; ?>
                      </div>
                    <?php else: ?>
                      <h2>Добавьте записи в категорию Why-us</h2>
                  <?php endif; ?>
                </div>
            </div>
        </div>
    </div><!--why-us-->
    
    <?php include __DIR__.'/inc/ability.php'; ?>

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
                    <?php $lates_news_posts = new WP_Query(['category_name' => 'news', 'posts_per_page' => 1]); ?>

                    <?php if ( $lates_news_posts->have_posts() ) : while ( $lates_news_posts->have_posts() ) : $lates_news_posts->the_post(); ?>
                        <div class="big-news">
                            <div class="img-wrap">
                                <img src="<?php bloginfo('template_url'); ?>/assets/i/home/big-news.jpg" alt="img">
                            </div>
                            <div class="big-news__content">
                                <h5 class="big-news__title"><?php the_title(); ?></h5>
                                <div class="big-news__data">
                                    <div class="big-news__data-item">By <?php the_author(); ?></div>
                                    <time class="big-news__data-item"><?php echo transcargo_get_the_date(); ?></time>
                                </div>
                            </div>
                        </div>
                      <?php endwhile; ?>
                      <!-- post navigation -->
                      <?php else: ?>
                        <h2>Постов не найдено</h2>
                    <?php endif; ?>
                </div>

                <div class="col-lg-6">
                    <?php $lates_news_posts = new WP_Query(['category_name' => 'news', 'posts_per_page' => 3]); ?>
                    <div class="small-news-wrap">
                        <?php $i = 0; ?>
                        <?php if ( $lates_news_posts->have_posts() ) : while ( $lates_news_posts->have_posts() ) : $lates_news_posts->the_post(); ?>
                            <?php $i++; ?>
                            <?php if($i == 1) : ?>
                                <?php continue; ?>
                            <?php else: ?>
                                <div class="small-news__item">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="img-wrap">
                                                <img src="<?php the_field('news_img'); ?>" alt="">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="big-news__content">
                                                <h5 class="big-news__title"><?php the_title(); ?></h5>
                                                <div class="big-news__data">
                                                    <div class="big-news__data-item">By <?php the_author(); ?></div>
                                                    <time class="big-news__data-item"><?php echo $date; ?></time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                          <?php endwhile; ?>
                          <?php else: ?>
                          <!-- no posts found -->
                        <?php endif; ?>
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
                <?php if(!dynamic_sidebar('trusted-partners')): ?>
                    <h2>Добавьте пратнеров через виджет текст</h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!--end-partners-->
</div><!--  main  -->

<?php get_footer(); ?>