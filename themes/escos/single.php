<div class="pagewrap page-with-sidebar">
  <div class="container">
    <div class="left-content">
      <?php get_template_part('templates/content-single', get_post_type()); ?>
    </div>
    <div class="right-sidebar">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
  </div>
</div>
