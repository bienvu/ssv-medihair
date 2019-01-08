<?php get_header(); 
  $boxCta = get_field('box_cta','option'); ?>
  <main role="main">
    <?php
    // check if the flexible content field has rows of data
    get_template_part('templates/components'); ?>
  </main>
  <div class="box-cta">
    <div class="container">
      <div class="section-title">
        <h2><?php print $boxCta['title']; ?></h2>
        <?php print $boxCta['body']; ?>
      </div>
      <div class="box-cta__link text--center">
        <a class="btn" target="<?php print $boxCta['link']['target']['0']; ?>" href="<?php print $boxCta['link']['url']; ?>"><?php print $boxCta['link']['text']; ?></a>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
