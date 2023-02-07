<?php
get_header();
?>
<i id="news-page"></i>
<main id="main-content">
  <section id="post-preview-container">
    <?php if (have_posts()):
      while (have_posts()):
        the_post(); ?>


        <section id="post-preview-container">
          <div class="post-preview">
            <h2 class="post-heading-full">
              <?php the_title(); ?>
              <span class="post-preview-info">
                <span class="post-preview-tags">
                  <?php
                  the_tags();
                  ?>
                  <span class="post-preview-tag">Czechy</span>
                  <span class="post-preview-tag">Praga</span>
                </span>
                <span class="post-preview-date">
                  <?php the_date(); ?>
                </span>
                <span class="post-preview-author"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="0.8rem"
                    height="0.8rem">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path fill="var(--primary-black)"
                      d="M20 22H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12z" />
                  </svg>
                  <span>
                    <?php the_author(); ?>
                  </span>
                </span>
              </span>
            </h2>
            <div class="post-full-content">
              <div class="post-preview-text-container">
                <div class="post-preview-text">
                  <?php the_content(); ?>
                </div>
              </div>
              <?php
              the_post_thumbnail('post-thumbnail', ['class' => "post-picture", 'title' => 'Feature image']);
              ?>
            </div>
          </div>
        <?php endwhile; else: ?>
        <article>
          <p>Sorry, no posts were found!</p>
        </article>
      <?php endif; ?>

    </section>
    </div>
</main>
<?php
get_footer();
?>