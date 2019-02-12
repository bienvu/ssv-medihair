<?php
if( get_row_layout() == 'block_reference' ):
  $block = get_sub_field('block');

  if($block) {
    echo do_shortcode($block->post_content);
  }
endif; ?>
