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
        <?php 
            global $post; 
            the_post();
        ?>
        <div class="shop-content">
            <div class="row">
                <div class="col-lg-6">
                    <div class="shop-content__item">
                        <h2 class="title"><?php the_field('content_title'); ?></h2>

                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shop-content__item">
                        <div class="img-wrap">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <p class="text">
                            <?php the_field('right_content'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div><!--shop-content-->

        <?php include __DIR__ . '/inc/features.php'; ?>

        <?php if(!dynamic_sidebar( 'green-block' )): ?>
            <div class="container">
                <div class="row">
                    <h2 style="color: red;">Grren Block</h2>
                </div>
            </div>
        <?php endif; ?>

        <!--team-->
        <div class="team section">
            <h2 class="title">Meet our team</h2>
            <h5 class="subtitle">Dedicated & professionals</h5>

            <?php $team_posts = new WP_Query(['category_name' => 'our-team', 'posts_per_page' => 4]); ?>

            <div class="row">
                <?php if ( $team_posts->have_posts() ) : while ( $team_posts->have_posts() ) : $team_posts->the_post(); ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="img-wrap wow flipInY" data-wow-delay=".3s">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <p class="position"><?php the_field('position'); ?></p>
                        <h4 class="title title__small"><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                  <?php endwhile; ?>
                  <!-- post navigation -->
                  <?php else: ?>
                  <!-- no posts found -->
                <?php endif; ?>
            </div>
        </div><!--team-->
    </div><!--container-->

    <?php include __DIR__.'/inc/fleets-gallery.php'; ?>

    <?php include __DIR__.'/inc/ability.php'; ?>

</div><!--  main  -->

<? get_footer(); ?>