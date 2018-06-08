<?php $ability_posts = new WP_Query(['category_name' => 'ability', 'posts_per_page' => 4]); ?>

<?php if ( $ability_posts->have_posts() ) : ?> 
  <div class="ability section">
    <div class="container">
      <div class="row">
        <?php while ( $ability_posts->have_posts() ) : $ability_posts->the_post(); ?>
          <div class="col-md-6 col-lg-3">
            <div class="ability__item wow flipInY">
              <div class="left-icon"><i class="fa <?php echo get_post_meta($post->ID, 'ability-icon', true); ?>"></i></div>
              <div class="ability__content">
                <span class="number"><?php echo get_post_meta($post->ID, 'ability-number', true); ?></span>
                <span class="text"><?php the_title(); ?></span>
              </div>
            </div>
          </div>                    
        <?php endwhile; ?>
      </div>
    </div>
  </div><!--ability-->
<?php else: ?>
  <div class="container section">
    <div class="row">
      <h2>Добавьте записи в категори Возможности</h2>
    </div>
  </div>
<?php endif; ?>
    <!--ability-->