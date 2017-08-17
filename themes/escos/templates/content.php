<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <!-- <?php get_template_part('templates/entry-meta'); ?> -->
  </header>
  <div class="article-row">
      <a href="<?php the_permalink() ?>" class="entry-thumbnail">
<?php echo get_the_post_thumbnail(get_the_id(), 'blog-thumbnail-small'); ?>
      </a>
    <div class="entry-summary">
      <p><time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></p>
            <p><?php echo excerpt(30); ?></p>
            <p><a href="<?php the_permalink() ?>" class="anchor-green"> Read More</a></p>
    </div>
  </div>

</article>
