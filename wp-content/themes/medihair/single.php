<?php get_header(); ?>
<?php $cats = wp_get_post_categories($post->ID); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <main role="main">
    <div class="article-detail">
      <div class="container">
        <div class="back-page">
          <?php
            $categories = get_categories();
            foreach ($categories as $cat) {
               $category_link = get_category_link($cat->cat_ID);
               echo '<a href="'.esc_url( $category_link ).'" title="'.esc_attr($cat->name).'">Back to '.$cat->name.'</a>';
            }
          ?>
        </div>
        <div class="article-detail__wrap">
          <div class="article-detail__list">
            <div class="article-detail__image">
              <?php the_post_thumbnail('details'); ?>
            </div>
            <div class="article-detail__description">
              <h2 class="article-detail__title"><?php the_title(); ?></h2>
              <div class="article-detail__published">
                <span> Published <?php the_time('j F Y'); ?> </span>
              </div>
              <div class="article-detail__social">
                <a class="social-facebook" href="#">
                  <i class="icon-facebook">
                  </i>
                </a>
                <a class="social-twitter" href="#">
                  <i class="icon-twitter">
                  </i>
                </a>
                <a class="social-email" href="#">
                  <i class="icon-email">
                  </i>
                </a>
              </div>
            </div>
          </div>

          <div class="article-detail__list">
            <div class="article-detail__body">
              <?php the_content(); ?>
            </div>
          </div>

          <div class="article-detail__bottom">
            <div class="back-page">
              <?php
                $categories = get_categories();
                foreach ($categories as $cat) {
                   $category_link = get_category_link($cat->cat_ID);
                   echo '<a href="'.esc_url( $category_link ).'" title="'.esc_attr($cat->name).'">Back to '.$cat->name.'</a>';
                }
              ?>
            </div>
          </div>
            
        </div>
      </div>
    </div>
  </main>
<?php endwhile; ?>
<?php else: ?>
  <h1><?php _e( 'Sorry, nothing to display.', 'sentiustheme' ); ?></h1>
<?php endif; ?>
<?php do_shortcode("[block id='free-consultation']"); ?>
<?php get_footer(); ?>
