<?php
if( get_row_layout() == 'box_form' ):
  $forms = get_sub_field('form');
  $boxFormItem = get_sub_field('box_form_item');
  $maps = get_sub_field('map');
  ?>
  
  <div class="box-form">
    <div class="container">
      <div class="box-form__wrap">
        <div class="box-form__content">
          <?php 
          if( have_rows('box_form_item') ):
          // loop through the rows of data
            while ( have_rows('box_form_item') ) : the_row();
              // Field variables
              $body = get_sub_field('body'); ?>

              <div class="box-form__item">
                <?php echo $body; ?>
              </div>
             <?php endwhile;
          endif; ?>
        </div>
        <div class="box-form__form">
          <?php echo $forms; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="box-map">
     <?php echo $maps; ?>
  </div>  
<?php endif; ?>
