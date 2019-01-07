<?php
if( get_row_layout() == 'list_member' ): ?>
  <div class="list-member">
  <div class="container">
    <div class="list-member__wrap">
      <?php if( have_rows('grid_image_item') ):
        // loop through the rows of data
        while ( have_rows('grid_image_item') ) : the_row(); 
          // Variable
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $body = get_sub_field('body');
          $link = get_sub_field('link');
        ?>
          <div class="list-member__item">
            <div class="list-member__image">
              <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
              <h4 class="mobile-only"><?php echo $title; ?></h4>
            </div>
            <div class="list-member__content">
              <h2 class="desktop-only"><?php echo $title; ?></h2>
              <div class="list-member__content--show"><?php echo $body; ?></div>
              <a class="read-more js-show-more" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php if($link): echo $link['title']; else: echo "Read More..."; endif; ?></a>
            </div>
          </div>
        <?php endwhile;
      endif; ?>
    </div>
  </div>
</div>
<?php endif; ?>
