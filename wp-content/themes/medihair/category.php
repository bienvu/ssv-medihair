<?php get_header(); ?>
<?php
  $termId = get_queried_object()->term_id;
  $childrenData = get_term_children($termId, 'category');
?>
  <main role="main" class="<?php if($childrenData):?>sub-category-page<?php else: ?>category-page<?php endif; ?>">
    <div class="list-article">
      <div class="container">
        <div class="section-title">
          <h1 class="h2"><?php printf(single_cat_title( '', false ) ); ?></h1>
        </div>

        <div class="list-article__wrap">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <div class="list-article__item">
              <div class="list-article__image">
                <a href="<?php the_permalink(); ?>">
                  <?php
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                      the_post_thumbnail('news');
                    }
                  ?>
                </a>
              </div>
              <div class="list-article__content">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php the_excerpt(); ?>
              </div>
            </div>
          <?php endwhile;
        endif; ?>
        </div>  
        <?php get_template_part('templates/pagination'); ?>
      </div>  
    </div>    
  </main>
  <?php echo do_shortcode("[block id='quick-contact']"); ?>
<?php get_footer(); ?>
