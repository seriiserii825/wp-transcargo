<?php 
/**
 * Template Name: Контакты
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

<!--main-->
<div class="main contacts">
    <div class="map wow zoomIn" id="js-map">
        
    </div>

    <?php the_post(); ?>

    <div class="contacts-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contacts-block">
                        <div class="address-block">
                            <h2 class="title wow zoomIn">Head office</h2>

                            <p><?php the_field('head_office_content'); ?></p>

                            <ul class="address-list">
                                <li class="address-list__item wow flipInY">
                                    <i class="fa fa-paper-plane"></i>
                                    <div class="address-list__content">
                                        <?php the_field('head_office_addres'); ?>
                                    </div>
                                </li>
                                <li class="address-list__item wow flipInY">
                                    <i class="fa fa-phone"></i>
                                    <div class="address-list__content"><?php the_field('head_office_phone'); ?></div>
                                </li>
                                <li class="address-list__item wow flipInY">
                                    <i class="fa fa-envelope-o"></i>
                                    <div class="address-list__content"><?php the_field('head_office_email'); ?></div>
                                </li>
                                <li class="address-list__item wow flipInY">
                                    <i class="fa fa-clock-o"></i>
                                    <div class="address-list__content"><?php the_field('head_office_date'); ?></div>
                                </li>
                            </ul>
                        </div><!--address-block-->

                        <div class="address-block">
                            <h2 class="title wow zoomIn">Branch office</h2>

                            <ul class="address-list">
                                <li class="address-list__item wow flipInY">
                                    <i class="fa fa-paper-plane"></i>
                                    <div class="address-list__content">
                                        <p><?php the_field('branch_office_addres'); ?></p>
                                    </div>
                                </li>
                                <li class="address-list__item wow flipInY">
                                    <i class="fa fa-phone"></i>
                                    <div class="address-list__content"><?php the_field('branch_office_phone'); ?></div>
                                </li>
                                <li class="address-list__item wow flipInY">
                                    <i class="fa fa-envelope-o"></i>
                                    <div class="address-list__content"><?php the_field('branch_office_email'); ?></div>
                                </li>
                                <li class="address-list__item wow flipInY">
                                    <i class="fa fa-clock-o"></i>
                                    <div class="address-list__content"><?php the_field('branch_office_date'); ?></div>
                                </li>
                            </ul>
                        </div><!--address-block--></div>
                </div>

                <div class="col-lg-8">
                    <div class="contacts-block">
                        <h2 class="title wow zoomIn">Send us a message</h2>
                        <p><?php the_field('send_us_a_message'); ?></p>

                        <form class="form" method="post" action="/">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group wow flipInY">
                                        <i class="fa fa-user"></i>
                                        <input type="text" name="login" placeholder="First Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group wow flipInY">
                                        <i class="fa fa-user"></i>
                                        <input type="text" name="lastName" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group wow flipInY">
                                        <i class="fa fa-envelope-o"></i>
                                        <input type="email" name="email" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group wow flipInY">
                                        <i class="fa fa-phone"></i>
                                        <input type="number" name="phone" placeholder="Phone no.">
                                    </div>
                                </div>
                            </div><!--row-->

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group wow flipInY"><input type="text" name="subject" placeholder="Subject"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group wow flipInY textarea">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="btn-wrap wow bounceInRight">
                                        <input type="submit" class="btn" value="Send message">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>