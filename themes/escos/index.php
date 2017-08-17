
<div class="container intro-para colour-heading">
<?php get_template_part('templates/page', 'header'); ?>
<h3>News and Events from Esco's and the local community</h3>
</div>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<main class="pagewrap no-top">


<div class="container blog-list">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
  <?php the_posts_navigation(); ?>
</div>
</main>
