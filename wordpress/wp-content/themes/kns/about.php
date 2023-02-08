<?php /* Template Name: About */?>
<?php
get_header();
?>
<i id="about-page"></i>
<main id="main-content">
  <?php
  if (have_posts()):
    while (have_posts()):
      the_post();
      // Display post content
      the_content();
    endwhile;
  endif;
  ?>
</main>


<?php
get_footer();
?>