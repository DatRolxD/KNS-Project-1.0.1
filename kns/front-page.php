<?php
get_header();
?>
<main id="main-content">
  <section id="post-preview-container">
    <?php
    if (have_posts()) {
      while (have_posts) {
        the_post();
        the_content();
      }
    }

    ?>



  </section>
  </div>
</main>
<?php
get_footer();
?>