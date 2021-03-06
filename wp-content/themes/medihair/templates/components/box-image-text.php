<?php
if( get_row_layout() == 'box_image_text' ):
  $title = get_sub_field('title');
  $body = get_sub_field('body');
  $link = get_sub_field('link');
  $image = get_sub_field('image');
  $imageMobile = get_sub_field('image_mobile');
  $type = get_sub_field('type');
  $background = get_sub_field('background');
  $size = 'full' 
  ?>
  
  <div class="box-image-text <?php print $type;?>">
    <div class="box-image-text__wrap">
      <?php if( $image ): ?>
        <div class="box-image-text__image <?php if( $imageMobile ): ?>desktop-only<?php endif; ?>" style="background-image: url(<?php print $image['url']; ?>); opacity: 1;">
          <?php if( $type == 'box-image-text--with-title' ): ?>
            <div class="box-image-text__image-description">
          <?php endif; ?>    
          <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
          <?php if( $type == 'box-image-text--with-title' ): ?>
              <div>
                <?php print $title; ?>
              </div>
            </div>
          <?php endif; ?> 
        </div>
      <?php endif; ?>
      <?php if( $imageMobile ): ?>
          <div class="box-image-text__image mobile-only" style="background-image: url(<?php print $imageMobile['url']; ?>)">
            <?php if( $type == 'box-image-text--with-title' ): ?>
              <div class="box-image-text__image-description">
            <?php endif; ?>    
            <?php echo wp_get_attachment_image( $imageMobile['ID'], $size ); ?>
            <?php if( $type == 'box-image-text--with-title' ): ?>
                <div>
                  <?php print $title; ?>
                </div>
              </div>
            <?php endif; ?>    
          </div>
      <?php endif; ?>

      <div class="box-image-text__content <?php print $background; ?>">
        <div>
          <div class="box-image-text__text">
            <?php print $body; ?>
          </div>
          <?php if( $link ): ?>
            <div class="box-image-text__link">
              <?php foreach( $link as $links ): ?>
                 <a class="btn" href="<?php print $links['link_url'] ?>"><?php print $links['link_text'] ?></a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
