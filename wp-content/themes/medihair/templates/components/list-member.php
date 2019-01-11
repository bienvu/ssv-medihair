<?php
if( get_row_layout() == 'list_member' ): ?>
  <div class="list-member">
  <div class="container">
    <div class="list-member__wrap">
      <?php if( have_rows('list_member_item') ):
        // loop through the rows of data
        while ( have_rows('list_member_item') ) : the_row(); 
          // Variable
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $body = get_sub_field('body');
          $readMore = get_sub_field('read_more');
        ?>
          <div class="list-member__item">
            <div class="list-member__image">
              <?php echo wp_get_attachment_image( $image['ID'], 'full' ); ?>
              <h4 class="mobile-only"><?php echo $title; ?></h4>
            </div>
            <div class="list-member__content">
              <h2 class="desktop-only"><?php echo $title; ?></h2>
              <div class="list-member__content--show <?php if( $readMore ){echo 'readMore';} ?>"><?php echo $body; ?></div>
              <?php if( $readMore ): ?>
              <a class="read-more js-show-more" href="#" >Read More...</a>
              <div class="list-member__content--hide">
                <?php echo $readMore; ?>
                <div class="read-more-wrap">
                  <a class="read-more js-show-more" href="#">Read Less</a>
                </div>
              </div>
              <?php endif; ?> 
            </div>
          </div>
        <?php endwhile;
      endif; ?>
    </div>
  </div>
</div>
<?php endif; ?>
