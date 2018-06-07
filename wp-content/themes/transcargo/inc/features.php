<!--delivery-->

<div class="delivery section">
    <div class="container">
        <div class="row"> 
            <?php $delivery_posts = new WP_Query(['category_name' => 'features', 'posts_per_page' => 3]); ?>
            <?php if ( $delivery_posts->have_posts() ) : ?> 
                <?php while ( $delivery_posts->have_posts() ) : $delivery_posts->the_post(); ?>
                    <div class="col-md-4">
                        <div class="img img-wrap" >
                            <?php the_post_thumbnail( 'full' ); ?>
                        </div>

                        <h3 class="title title__small"><?php the_title(); ?></h3>
                        <p class="delivery__text">
                            <?php the_excerpt(); ?>
                        </p>

                        <div class="btn-wrap red">
                            <a href="<?php the_permalink(); ?>" class="btn wow slideInUp">Read more</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
              <h2>Нет постов из категории Преимущества</h2>
          <?php endif; ?>
      </div>
  </div>
</div>

