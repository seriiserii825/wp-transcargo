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
                <h2 class="page-header__title title"><?php single_cat_title(); ?></h2>
            </div>
        </div>
    </div>
</section>

<!--main-->
<div class="main our-services">
    <div class="container">
        <div class="row">

            <!--sidebar-->
            <div class="col-lg-3 order-2 order-lg-1">
                <aside class="sidebar">
                    <ul class="categories">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <li class="category-item wow flipInX">
                                <a href="<?php the_permalink(); ?>" class="category-link"><?php the_title(); ?></a>
                            </li>
                          <?php endwhile; ?>
                          <!-- post navigation -->
                          <?php else: ?>
                          <!-- no posts found -->
                        <?php endif; ?>
                    </ul>
                </aside>
            </div>

            <!--our-services__content-->
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="our-services__content">
                    <div class="row">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="col-lg-4 col-sm-6 wow flipInY">
                                <div class="our-services__item">
                                    <div class="img-wrap">
                                        <?php the_post_thumbnail( 'full'); ?>
                                    </div>
                                    <h4 class="title title__small"><?php the_title(); ?></h4>
                                    <p class="text">
                                        <?php the_excerpt(); ?>
                                    </p>
                                    <div class="btn-wrap">
                                        <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                          <?php endwhile; ?>
                          <!-- post navigation -->
                          <?php else: ?>
                          <!-- no posts found -->
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- col-lg-9 -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- main -->

<?php get_footer(); ?>