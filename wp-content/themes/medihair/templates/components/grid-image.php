<?php
if( get_row_layout() == 'grid_image' ):
  $blockTitle = get_sub_field('block_title');
  $description = get_sub_field('description');
  $type = get_sub_field('type');
  $gridImageItem = get_sub_field('grid_image_item');
  ?>
  
  <div class="grid-image <?php echo $type; ?>">
    <?php if($blockTitle): ?>
      <h2 class="section-title text--center"><?php echo $blockTitle; ?></h2>
    <?php endif; ?>
    <?php if($description): ?>
      <p><?php echo $description; ?></p>
    <?php endif; ?>
    <div class="grid-image__inner">
      <div class="grid-image__wrap">
        <?php 
        if( have_rows('grid_image_item') ):
        // loop through the rows of data
          while ( have_rows('grid_image_item') ) : the_row();
            // Field variables
            $image = get_sub_field('image');
            $content = get_sub_field('content');
            $link = get_sub_field('link'); ?>

            <div class="grid-image__item">
              <div class="grid-image__content">
                <a href="<?php echo $link['url']; ?>">
                  <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                  
                </a>
                <div class="grid-image__link text--white ">
                  <div class="grid-image__body">
                    <?php echo $content; ?>
                  </div>
                  <a class="btn btn--bg-white" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">View results</a>
                </div>
              </div>
            </div>
          <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
