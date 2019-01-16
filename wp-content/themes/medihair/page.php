<?php get_header(); ?>
  <main role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php if ( !empty( get_the_content() ) ): ?>
        <div class="entry-content-page">
          <div class="container">
            <?php the_content(); ?>
          </div>  
        </div>
      <?php endif; ?>  
    <?php endwhile; endif; ?>
    <?php
    // check if the flexible content field has rows of data
    get_template_part('templates/components'); ?>
  </main>
<?php get_footer(); ?>
