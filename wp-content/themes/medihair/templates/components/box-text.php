<?php
if( get_row_layout() == 'box_text' ):
  $title = get_sub_field('title');
  $body = get_sub_field('body');
  $link = get_sub_field('link');
  $background = get_sub_field('background'); ?>
  
  <div class="box-text <?php echo $background;?>">
    <div class="container">
      <div class="box-text__content">
        <?php if($title): ?>
          <div class="section-title">
            <h2 class="text--left"><?php echo $title; ?></h2>
          </div>
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
