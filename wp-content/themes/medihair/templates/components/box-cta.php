<?php
if( get_row_layout() == 'box_text' ):
  $title = get_sub_field('title');
  $body = get_sub_field('body');
  $link = get_sub_field('link'); ?>
  
  <div class="box-cta bg--gray">
    <div class="container">
      <?php if($title): ?>
        <h2 class="section-title text--center"><?php echo $title; ?></h2>
      <?php endif; ?>
      <div class="text--center"><?php echo $body; ?></div>
      <?php if($title): ?>
        <div class="box-cta__link text--center"><a class="btn" href="<?php echo $link["url"]; ?>"><?php if($link): echo $link['title']; else: echo "Book now"; endif; ?></a></div>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
