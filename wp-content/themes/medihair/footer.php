<?php
	$footerData = get_field('footer','option');
?>
      <footer class="footer">
        <div class="footer__top bg--primary text--white">
          <div class="container">
            <div class="footer__wrap">
              <div class="footer__wrap--menu">
                <div class="menu-footer">
                  <div class="menu-footer__item first">
                    <?php medihair_navigation('','Footer Menu Left','Extra Menu'); ?>
                  </div>
                  <div class="menu-footer__item last">
                    <?php medihair_navigation('','Footer Menu Right','Extra Menu'); ?>
                  </div>
                </div>
              </div>
              <div class="footer__wrap--form">
                  <?php print $footerData['footer_form']; ?>
              </div>
              <div class="footer__wrap--address">
                  <?php print $footerData['footer_address']; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__bottom bg--white text--dark">
            <div class="container">
            	<?php print $footerData['footer_copy']; ?>
            </div>
        </div>
      </footer>
    </div>
    <!-- /wrapper -->

    <?php wp_footer(); ?>
  </body>
</html>
