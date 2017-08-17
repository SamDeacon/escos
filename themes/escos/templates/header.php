<div class="mobile-bar">
  <div class="telephone">
    <img src="/wp-content/themes/escos/public/img/assets/phone-logo.png" alt=""><?php echo escos_get_option('telephone_number') ?>
  </div>

  <div id="navtoggle">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </div>
  <nav class="mobile-menu-nav">
    <?php
    if (has_nav_menu('main-mobile-menu')) :
      wp_nav_menu(['theme_location' => 'main-mobile-menu', 'menu_class' => 'nav']);
    endif;
    ?>
  </nav>
</div>
<header class="header">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="/wp-content/themes/escos/public/img/assets/logo.png" alt="Escos New Radnor Logo"></a>
    <div class="telephone">
      <img src="/wp-content/themes/escos/public/img/assets/phone-logo.png" alt="">01524&nbsp;350619
    </div>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>

<?php
// $featured_img_url = the_post_thumbnail_url( 'header' );
// var_dump($featured_img_url);

?>
<?php if (is_front_page()) { ?>
  <?php
  $meta = get_post_meta( get_the_ID());

  $banner_list = unserialize($meta['homepage_slider_group'][0]);

  ?>
  <div class="homepage-slider" id="slick-fader">
    <?php foreach ($banner_list as $key => $slide) {
      $img_id = $slide['home_banner_image_id'];
      $img_url = wp_get_attachment_image_src($img_id, 'home-banner-image');
      ?>

      <div class="banner" style="background-image:url(<?php echo $img_url[0]; ?>);">
      </div>
      <?php  } ?>


    </div>
    <?php
  } else { ?>
    <?php
    $img_id = escos_get_option('default_banner_id');
    $img_url = wp_get_attachment_image_src($img_id, 'home-banner-image');
    ?>
    <div class="banner" style="background-image:url(<?php echo $img_url[0]; ?>);">
    </div>
    <?php } ?>
