<?php
/**
 * Template Name: Contact Page Template
 */
?>


<div class="container intro-para colour-heading contact-page">
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
</div>
<div class="contact-form-section">
    <div class="container intro-para colour-heading">
      <?php echo do_shortcode('[contact-form-7 id="56" title="Contact form 1"]'); ?>

    </div>

</div>
