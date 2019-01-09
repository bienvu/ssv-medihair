<?php
if( get_row_layout() == 'box_results' ): 
  $boxResultsItem = get_sub_field('box_results_item');
  $title = get_sub_field('block_title');
  $description = get_sub_field('description');
  $links = get_sub_field('links');
  ?>

  <div class="box-results">
    <div class="container">
      <div class="section-title text--left">
          <h1><?php echo $title; ?></h1>
          <?php echo $description; ?>
        </div>
      <div class="box-results__wrap">
         <?php 
          if( have_rows('box_results_item') ):
          // loop through the rows of data
            while ( have_rows('box_results_item') ) : the_row();
              // Field variables
              $gallery = get_sub_field('gallery'); ?>
                <div class="box-results__items">
                <?php if( $gallery ): ?>
                  <?php foreach( $gallery as $image ): ?>
                    <div class="box-results__item">
                      <div class="box-results__image"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
                      <div class="box-results__content">
                        <h5 class="text--center"> <?php echo $image['description']; ?> </h5>
                      </div>
                    </div>  
                  <?php endforeach; ?>
                <?php endif; ?>
                </div>
            <?php endwhile;
          endif; ?>
      </div>
      <div class="box-results__link">
        <div class="multiLink">
          <?php 
          if( have_rows('links') ):
          // loop through the rows of data
            while ( have_rows('links') ) : the_row();
              // Field variables
              $link = get_sub_field('link'); ?>

               <a class="btn" href="<?php print $link['url'] ?>"><?php print $link['title'] ?></a>
              
             <?php endwhile;
          endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
