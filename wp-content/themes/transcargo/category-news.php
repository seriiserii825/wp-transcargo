<?php get_header(); ?>

<?php 
    $term = get_queried_object();
    $image = get_field('header_img', $term);
?>

<section class="page-header" style="background-image: url('<?php echo $image; ?>')">
    <div class="container">

        <!--page-header-->
        <div class="row">
            <div class="col-12">
                <h2 class="page-header__title title"><?php single_cat_title();?></h2>
            </div>
        </div>
    </div>
</section>

<!--main-->
<div class="main latest-news-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="latest-news__content">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="latest-news__item">

                            <div class="img-wrap">
                                <?php the_post_thumbnail( 'full'); ?>
                            </div>

                            <ul class="description">
                                <li class="description__item wow flipInY"><?php the_comment(); ?> Comment(s)</li>
                                <li class="description__item wow flipInY">Delivery, Cargo, Shipment</li>
                                <li class="description__item wow flipInY"><?php echo transcargo_get_the_date(); ?></li>
                                <li class="description__item wow flipInY"><?php the_author(); ?></li>
                            </ul>

                            <h3 class="title wow zoomIn"><?php the_title(); ?></h3>

                            <p class="text">
                                <?php the_excerpt(); ?>
                            </p>

                            <div class="btn-wrap">
                                <a href="<?php the_permalink(); ?>" class="btn wow bounceInUp">Read More</a>
                            </div>
                        </div>
                      <?php endwhile; ?>
                      <!-- post navigation -->
                      <?php else: ?>
                      <!-- no posts found -->
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-3">
                <aside class="news-sidebar">
                    <div class="block">
                        <form class="search">
                            <input type="text" name="s" class="search-input" placeholder="Search Blog">
                            <i class="fa fa-search"></i>
                        </form>
                    </div>

                    <div class="block">
                        <ul class="news-categories">
                            <?php $our_services_posts = new WP_Query(['category_name' => 'our-services', 'posts_per_page' => 5]);?>

                            <?php if ( $our_services_posts->have_posts() ) : while ( $our_services_posts->have_posts() ) : $our_services_posts->the_post(); ?>
                                    <li class="news-categories__item wow flipInX">
                                        <a href="<?php the_permalink(); ?>" class="news-categories__link"><?php the_title(); ?></a>
                                    </li>
                              <?php endwhile; ?>
                              <!-- post navigation -->
                              <?php else: ?>
                              <!-- no posts found -->
                            <?php endif; ?>
                            
                        </ul>
                    </div>
                        
                    <?php if(!dynamic_sidebar( 'last-posts' )): ?>
                        <h2>Виджет последних записей</h2>
                    <?php endif; ?>

                        <h3 class="title">Twitter feeds</h3>

                        <div class="block">
                            <ul class="twitter-list">
                                <li class="twitter-list__item">
                                    <div class="twitter-list__content">
                                        <i class="fa fa-twitter"></i>
                                        <p class="text">
                                            Android How to: Take Screenshots on Android Auto http://dlvr.it/BL6PYf #Android
                                            #Google
                                        </p>
                                        <time class="twitter-list__time">3 hours ago</time>
                                    </div>
                                </li>
                                <li class="twitter-list__item">
                                    <div class="twitter-list__content">
                                        <i class="fa fa-twitter"></i>
                                        <p class="text">
                                            Exclusive iStock Promo Codes for WDL Readers #iStock #prvitae
                                        </p>
                                        <time class="twitter-list__time">8 hours ago</time>
                                    </div>
                                </li>
                                <li class="twitter-list__item">
                                    <div class="twitter-list__content">
                                        <i class="fa fa-twitter"></i>
                                        <p class="text">
                                            Recite the Quran with the intention to cure the diseases of your heart, so you
                                            can worship Allah with sincerity.
                                        </p>
                                        <time class="twitter-list__time">14 hours ago</time>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
