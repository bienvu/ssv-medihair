<?php
if( have_rows('component') ):
     // loop through the rows of data
	while ( have_rows('component') ) : the_row();
    if( get_row_layout() == 'banner' ):
      $count = count(get_sub_field("banner_item")); ?>
      <div class="banner <?php if($count > 1): ?>banner--width-slider<?php endif; ?>">
      		<div class="banner__inner <?php if($count > 1): ?>js-slider<?php endif; ?>">
      			<?php if (have_rows('banner_item')):
            while (have_rows('banner_item')): the_row();
            $title = get_sub_field('title');
            $link = get_sub_field('link');
            $images = get_sub_field('image');
            $subtitle = get_sub_field('subtitle');
            $description = get_sub_field('description');
            $size = 'full'; ?>
              <div class="banner__item">
                <?php if( $images ): ?>
                  <?php foreach( $images as $image ): ?>
                    <div class="banner__images" <?php if($count > 1): ?>style="background-image: url(<?php print $image['url']; ?>)" <?php endif; ?>>
                      <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                    </div>
                  <?php endforeach; ?>
                <?php endif; ?>
                
                <?php if($count > 1): ?>
                <div class="banner__content desktop-only">
                  	<span class="banner__description"><?php print $description; ?></span>
        			<h3 class="banner__subtitle"><?php print $subtitle; ?></h3>
                </div>
                <div class="banner__subcontent">
                	<h1 class="banner__title"><?php print $title; ?></h1>
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
          <i class="icon-arrow-bottom js-scroll-down">
          </i>
      </div>
      	</div>
      </div>
    <?php endif; ?>  
	<?php endwhile;
endif;?>
