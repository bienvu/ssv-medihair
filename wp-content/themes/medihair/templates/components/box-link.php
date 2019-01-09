<?php
if( get_row_layout() == 'box_link' ): 
  ?>
<div class="box-link">
  <div class="container">
    <div class="box-link__content">
      <?php 
      if( have_rows('box_link_item') ):
      // loop through the rows of data
        while ( have_rows('box_link_item') ) : the_row();
          // Field variables
          $linkText = get_sub_field('link_text'); 
          $linkUrl = get_sub_field('link_url'); ?>

           <a class="btn" href="<?php echo $linkUrl; ?>"><?php echo $linkText; ?></a>
          
         <?php endwhile;
      endif; ?>
    </div>
  </div>
</div>
<?php endif; ?>
