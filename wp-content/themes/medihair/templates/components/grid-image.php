<?php
if( get_row_layout() == 'grid_image' ):
  $blockTitle = get_sub_field('block_title');
  $description = get_sub_field('description');
  $type = get_sub_field('type');
  $gridImageItem = get_sub_field('grid_image_item');
  ?>
  
  <div class="grid-image <?php echo $type; ?> <?php if($type=='grid-image--2col'){echo 'how-it-works';} ?>">
    <?php if($type=='grid-image--2col'): ?>
    <div class="container">
    <?php endif; ?>
      <?php if($blockTitle): ?>
        <div class="section-title">
          <h2><?php echo $blockTitle; ?></h2>
          <?php if($description): ?>
            <p><?php echo $description; ?></p>
          <?php endif; ?>
        </div>  
      <?php endif; ?>
      <div class="grid-image__inner">
        <div class="grid-image__wrap">
          <?php 
          if( have_rows('grid_image_item') ):
          // loop through the rows of data
            while ( have_rows('grid_image_item') ) : the_row();
              // Field variables
              $image = get_sub_field('image');
              $imageMobile = get_sub_field('image_mobile');
              $content = get_sub_field('content');
              $link = get_sub_field('link'); ?>

              <div class="grid-image__item <?php if( !$image ){echo 'grid-image__item--no-image';} ?>">
                <div class="grid-image__content">
                  
                  <a href="<?php if( $link ){echo  $link['url'];} else{echo '';} ?>" class="<?php if( !$link ){echo 'no-link';} ?>">
                    <?php if( $image ): ?>
                      <div class="<?php if( $imageMobile ): ?>desktop-only grid-image__content--image<?php endif; ?>">
                        <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
                      </div>
                    <?php endif; ?> 
                    <?php if( $imageMobile ): ?>
                      <div class="mobile-only grid-image__content--image">
                        <?php echo wp_get_attachment_image( $imageMobile['ID'], 'full' ); ?>
                      </div>
                    <?php endif; ?>
                    <?php if($type=='grid-image--4col'): ?>
                      <div class="grid-image--4col__content">
                        <?php echo $content; ?>

                      </div>  
                    <?php endif; ?> 
                    <div class="grid-image__link">
                      <?php if($type=='grid-image--2col'): ?>
                        <div class="grid-image__body">
                          <?php echo $content; ?>
                        </div>
                      <?php endif; ?>
                      <?php if( $link ): ?>
                      <a class="btn btn--bg-white" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                      <?php endif; ?>
                    </div>
                  </a>
                  
                  
                </div>
              </div>
            <?php endwhile;
          endif; ?>
        </div>
      </div>
    <?php if($type=='grid-image--2col'): ?>  
    </div>  
    <?php endif; ?>
  </div>
<?php endif; ?>
