<?php 
/**
 * Template Name: О нас
 */
    get_header(); 
?>

<?php 
    $term = get_queried_object();
    $image = get_field('header_img', $term);
    $title = get_the_title();
?>

<section class="page-header wow zoomIn" style="background-image: url('<?php echo $image; ?>')">
    <div class="container">

        <!--page-header-->
        <div class="row">
            <div class="col-12">
                <h2 class="page-header__title title"><?php echo $title; ?></h2>
            </div>
        </div>
    </div>
</section>

<!--main-->
<div class="main about-us">
    <h4 class="subtitle">For all your cargo needs</h4>
    <h2 class="title">Transcargo - the right choice</h2>

    <div class="container">
        <div class="row wow zoomInDown">
            <div class="col-12">
                <div class="about-us-tabs" id="js-about-us-tabs">
                    <div class="wrapper">
                        <?php $about_us_accordeon = new WP_Query(['category_name' => 'about-us-accordeon', 'posts_per_page' => 3]); ?>
                        
                        <div class="tabs">
                            <?php if ( $about_us_accordeon->have_posts() ) : while ( $about_us_accordeon->have_posts() ) : $about_us_accordeon->the_post(); ?>
                                <span class="tab"><?php the_title(); ?></span>    
                              <?php endwhile; ?>
                              <!-- post navigation -->
                              <?php else: ?>
                              <!-- no posts found -->
                            <?php endif; ?>
                        </div>

                        <div class="tab_content">
                            <?php if ( $about_us_accordeon->have_posts() ) : while ( $about_us_accordeon->have_posts() ) : $about_us_accordeon->the_post(); ?>
                                <div class="tab_item">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="img-wrap">
                                                <?php the_post_thumbnail( 'full'); ?>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <h6 class="tab-title"><?php the_field('about-us-accordeon-subtitle'); ?></h6>

                                            <p class="text">
                                                <?php the_content(); ?>
                                            </p>
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
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

