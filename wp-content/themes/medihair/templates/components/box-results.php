<?php
if( get_row_layout() == 'box_results' ): 
  $gallery = get_sub_field('gallery');
  ?>

  <div class="box-results">
    <div class="container">
      <div class="box-results__wrap">
        <?php if( $gallery ): ?>
          <?php foreach( $gallery as $image ): ?>
            <div class="box-results__image"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
