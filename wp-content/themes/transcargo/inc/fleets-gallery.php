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
                    <?php $fleets_gallery = new WP_Query(['name' => 'fleets-gallery']); ?>

                    <?php if ( $fleets_gallery->have_posts() ) : while ( $fleets_gallery->have_posts() ) : $fleets_gallery->the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    <!-- post navigation -->
                <?php else: ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- container -->
</div>
    <!-- fleets-gallery -->