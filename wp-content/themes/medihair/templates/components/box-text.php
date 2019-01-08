<?php
if( get_row_layout() == 'box_text' ):
  $title = get_sub_field('title');
  $body = get_sub_field('body');
  $link = get_sub_field('link'); ?>
  
  <div class="box-text">
    <div class="container">
      <div class="box-text__content">
        <?php if($title): ?>
          <h2 class="section-title text--left"><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php echo $body; ?>
      </div>
      <?php if($link): ?>
        <div class="box-text__link">
          <a class="btn" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php if($link): echo $link['title']; else: echo "FIND OUT MORE"; endif; ?></a>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
