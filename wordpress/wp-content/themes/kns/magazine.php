<?php /* Template Name: Magazine */?>
<?php
get_header();
?>
<i id="magazine-page"></i>
<main id="main-content">
  <h2 class="main-heading">
    <?php the_title(); ?>
  </h2>
  <section id="magazine-container">
    <?php
    if (have_posts()):
      while (have_posts()):
        the_post();
        // Display post content
        the_content();
      endwhile;
    endif;
    ?>
  </section>
</main>
<?php
get_footer();
?>