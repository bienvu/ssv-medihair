<?php
if( get_row_layout() == 'banner' ):
  $count = count(get_sub_field("banner_item")); 
?>
  <div class="banner <?php if($count > 1): ?>banner--width-slider<?php endif; ?>">
    <div class="banner__inner <?php if($count > 1): ?>js-slider<?php endif; ?>">
      <?php if (have_rows('banner_item')):
        while (have_rows('banner_item')): the_row();
          $title = get_sub_field('title');
          $link = get_sub_field('link');
          $images = get_sub_field('image');
          //print_r($images);
          $subtitle = get_sub_field('subtitle');
          $description = get_sub_field('description');
          $size = 'full'; ?>
          <div class="banner__item">
            <?php if( $images ): ?>
              <div class="banner__images" style="background-image: url(<?php print $images['url']; ?>)" >
                <?php echo wp_get_attachment_image( $images['ID'], $size ); ?>
              </div>
            <?php endif; ?>
            
            <?php if($count > 1): ?>
            <div class="banner__content desktop-only">
              <span class="banner__description"><?php print $description; ?></span>
              <h3 class="banner__subtitle"><?php print $subtitle; ?></h3>
            </div>
            <div class="banner__subcontent">
              <h2 class="banner__title"><?php print $title; ?></h2>
                <?php if($link): ?>
                  <a href="<?php print $link['url']; ?>" class="btn"><?php if($link['title']) {print $link['title'];} else {print 'Discover More';} ?></a>
                <?php endif;?>
            </div>
            <?php endif; ?>
          </div>
        <?php endwhile;
      endif;?>
    </div>
    <div class="scroll-element desktop-only">
      <i class="icon-arrow-bottom js-scroll-down"></i>
    </div>
  </div>

  <div class="content-wrap">
<?php endif;?>
