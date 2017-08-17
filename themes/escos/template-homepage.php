<?php
/**
* Template Name: Homepage  Template
*/

$meta = get_post_meta( get_the_ID());

$box_list = unserialize($meta['homepage_cta_boxes'][0]);

$img_1 = $box_list[0]['home_box_image_id'];
$img_2 = $box_list[1]['home_box_image_id'];
$img_3 = $box_list[2]['home_box_image_id'];

$img_1_url = wp_get_attachment_image_src($img_1, 'blog-thumbnail');
$img_2_url = wp_get_attachment_image_src($img_2, 'blog-thumbnail');
$img_3_url = wp_get_attachment_image_src($img_3, 'blog-thumbnail');

$link_1 = $box_list[0]['home_box_link'];
$link_2 = $box_list[1]['home_box_link'];
$link_3 = $box_list[2]['home_box_link'];

$title_1 = $box_list[0]['home_box_title'];
$title_2 = $box_list[1]['home_box_title'];
$title_3 = $box_list[2]['home_box_title'];
?>
<div class="container intro-para colour-heading">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  <?php endwhile; ?>
</div>
<section class="three-column-boxes">
  <div class="container twelve-column-grid clearfix-me">


    <a class="box one-third" href="<?php echo $link_1; ?>">
      <img src="<?php echo $img_1_url[0]; ?>" ></img>
      <div class="board-sign">
        <h2><?php echo $title_1; ?></h2>
      </div>
    </a>
    <a class="box one-third" href="<?php echo $link_2; ?>">
      <img src="<?php echo $img_2_url[0]; ?>" ></img>
      <div class="board-sign">
        <h2><?php echo $title_2; ?></h2>
      </div>
    </a>
    <a class="box one-third" href="<?php echo $link_3; ?>">
      <img src="<?php echo $img_3_url[0]; ?>" ></img>
      <div class="board-sign">
        <h2><?php echo $title_3; ?></h2>
      </div>
    </a>
  </div>
</section>
<section class="homepage-newsfeed">
  <div class="intro-para colour-heading">
    <h2>Community News And Events<span>all the latest news and Events from Esco's and New Radnor</span></h2>
  </div>
  <div class="container twelve-column-grid">
    <?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

      <div class="article one-half">
        <a href="<?php the_permalink() ?>" class="image-half">
          <?php echo get_the_post_thumbnail(get_the_id(), 'blog-thumbnail'); ?>
        </a>
        <div class="text-half">
          <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
          <p><?php echo excerpt(30); ?></p>
          <p><br><a href="<?php the_permalink() ?>" class="anchor-green">Read More</a></p>
        </div>
      </div>
      <?php
    endwhile;
    wp_reset_postdata();
    ?>
  </div>
  <div class="container text-align-center">
    <a href="/whats-on" class="shadow-button green">
      More News &amp; Events
    </a>
  </div>
</section>
