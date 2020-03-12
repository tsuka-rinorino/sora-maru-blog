    <footer class="footer">
      <div class="footer__inner">
        <div class="footer-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'footer-nav' )); ?>
        </div>
      </div>
      <div class="footer__footer">
        <div class="footer__inner">
          <p class="copyright"><small>© 2020 SORA-MARU</small></p>
          <button class="totop">
            <img class="totop__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/totop.svg" alt="">
          </button>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
