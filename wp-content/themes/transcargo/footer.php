<!--footer-->
<footer class="footer-main">
    <?php  $footer_posts = new WP_Query(['name' => 'footer']); ?>
    <?php  $footer_posts->the_post();?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- logo -->
                <div class="logo">
                    <div class="img-wrap">
                        <span class="icon-logo"></span>
                    </div>

                    <!-- logo-conten -->
                    <div class="logo-content">
                        <h2 class="logo-title"><?php bloginfo('name'); ?></h2>

                        <span class="logo-text"><?php bloginfo('description'); ?></span>
                    </div>
                </div>

                <p class="text"><?php the_content(); ?></p>
                
                <?php if(!dynamic_sidebar('footer-widgets-icons')): ?>
                    <h2>Место для социальных иконок</h2>
                <?php endif; ?>

                <div class="btn-wrap white">
                    <a href="#" class="btn">Get a free quote</a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <h4 class="title title-small">We offers</h4>

                <?php $offers_posts = new WP_Query(['category_name' => 'our-services']); ?>

                <ul class="footer-list">
                    <?php if ( $offers_posts->have_posts() ) : while ( $offers_posts->have_posts() ) : $offers_posts->the_post(); ?>
                        <li class="footer-list__item">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                      <?php endwhile; ?>
                      <!-- post navigation -->
                      <?php else: ?>
                      <!-- no posts found -->
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6">
                <h4 class="title title-small">Main links</h4>

                <?php wp_nav_menu( array(
                    'theme_location'  => 'footer-menu',
                    'container'       => '',
                    'menu_class'      => 'footer-list',
                    'before'          => '',
                    'after'           => '',
                ) ); ?>

            </div>

            <?php  $footer_posts = new WP_Query(['name' => 'footer']); ?>
            <?php  $footer_posts->the_post();?>

            <div class="col-lg-4 col-md-6">
                <h4 class="title title-small">Contact info</h4>

                <p class="text"><?php the_field('contact_info'); ?></p>

                <ul class="contact-list">
                    <li class="contact-list__item">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        <div class="contact-list__content"><?php the_field('footer_address'); ?></div>
                    </li>

                    <li class="contact-list__item">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="contact-list__content"><?php the_field('footer_phone'); ?></div>
                    </li>

                    <li class="contact-list__item">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <div class="contact-list__content"><?php the_field('footer_email'); ?></div>
                    </li>

                    <li class="contact-list__item">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <div class="contact-list__content"><?php the_field('footer_date'); ?></div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="copy">
                <button class="up" id="js-up">
                    <i class="fa fa-chevron-up"></i>
                </button>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copy__text">Created by
                                <span class="red">Templines</span> &copy; 2015 TransCargo All rights reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>