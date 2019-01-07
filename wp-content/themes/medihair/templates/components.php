
<?php
if( have_rows('component') ):
     // loop through the rows of data
  while ( have_rows('component') ) : the_row();
    // Banner
    get_template_part('templates/components/banner');

    // Box Image Text
    get_template_part('templates/components/box-image-text');

    // Box Image Text
    get_template_part('templates/components/grid-image');

    // Box Text
    get_template_part('templates/components/box-text');

    // Box Cta
    get_template_part('templates/components/box-cta');

    // List member
    get_template_part('templates/components/list-member');

    // block reference
    get_template_part('templates/components/block-reference');

    // box results
    get_template_part('templates/components/box-results');

  endwhile;
endif;?>
