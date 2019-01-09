<?php
if( get_row_layout() == 'box_faq' ): 
  $boxFaq = get_sub_field('box_faq_item');
  $title = get_sub_field('block_title');
  $links = get_sub_field('links');
  ?>

<div class="box-faq">
  <div class="container">
    <div class="section-title">
      <h2 class="text--left"><?php echo $title; ?></h2>
    </div>
    <div class="box-faq__content">
      <?php 
          if( have_rows('box_faq_item') ):
          // loop through the rows of data
            while ( have_rows('box_faq_item') ) : the_row();
              // Field variables
              $question = get_sub_field('question');
              $answer = get_sub_field('answer'); ?>
              <div class="box-faq__item">
                <div class="box-faq__question">
                  <h4><?php echo $question; ?></h4>
                </div>
                <div class="box-faq__answer">
                  <?php echo $answer; ?>
                </div>
              </div>
            
          <?php endwhile;
        endif; ?> 
    </div> 
    <div class="box-faq__link">
      <?php 
        if( have_rows('links') ):
        // loop through the rows of data
          while ( have_rows('links') ) : the_row();
            // Field variables
            $link = get_sub_field('link'); ?>

             <a class="btn" href="<?php print $link['url'] ?>"><?php print $link['title'] ?></a>
            
           <?php endwhile;
        endif; ?>
    </div>
  </div>
</div>
<?php endif; ?>
