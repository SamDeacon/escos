<footer class="footer">
  <div class="container twelve-column-grid clearfix-me">
    <div class="one-third left-menu">
      <?php
      if (has_nav_menu('footer-menu-1')) :
        wp_nav_menu(['theme_location' => 'footer-menu-1', 'menu_class' => 'nav']);
      endif;
      ?>
    </div>
    <div class="one-third center-links">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="/wp-content/themes/escos/public/img/assets/logo-white.png" alt="Escos New Radnor Logo"></a>

      <div class="social-icons">
        <a href="<?php echo escos_get_option('facebook_link'); ?>" target="_blank">
          <img src="/wp-content/themes/escos/public/img/assets/facebook-white.png" alt="facebook icon">
        </a>
        <a href="mailto:simcoshar@aol.com" title="Email Escos">
          <img src="/wp-content/themes/escos/public/img/assets/email-white.png" alt="email icon">
        </a>
      </div>
      <h3>Get In touch</h3>
      <div class="telephone">
        <a href="tel:<?php echo escos_get_option('telephone_number') ?>">
          <img src="/wp-content/themes/escos/public/img/assets/phone-white.png" alt="white telephone icon"><?php echo escos_get_option('telephone_number') ?>
        </a>
      </div>
    </div>
    <div class="one-third right-address">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
  </div>
  <div class="container footer-credits">
    <a href="mailto:deaconsam10@gmail.com">Website by nerdygoat.co.uk</a> <span>|</span> <a href="/terms">Photography by A. Photograpy</a>
  </div>
</footer>
