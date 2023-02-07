<?php
get_header();
?>

<body>
  <h1>
    <?php bloginfo('name'); ?>
  </h1>
  <h2>
    <?php bloginfo('description'); ?>
  </h2>


  <?php if (have_posts()):
    while (have_posts()):
      the_post(); ?>
      <?php
      the_post_thumbnail();
      ?>
      <h3>
        <?php the_title(); ?>
      </h3>
      <p>
        <?php the_excerpt(); ?>
      </p>
      <?php
      the_shortlink()
        ?>
      <?php
      the_tags()
        ?>
      <?php wp_link_pages(); ?>
      <?php edit_post_link(); ?>

    <?php endwhile; ?>

    <?php
    if (get_next_posts_link()) {
      next_posts_link();
    }
    ?>
    <?php
    if (get_previous_posts_link()) {
      previous_posts_link();
    }
    ?>

  <?php else: ?>

    <p>No posts found. :(</p>

  <?php endif; ?>

  <?php
  get_footer();
  ?>