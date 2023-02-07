<?php
get_header();
?>
<i id="news-page"></i>
<i id="lusatia"></i>
<main id="main-content">
  <section id="post-preview-container">
    <?php if (have_posts()):
      while (have_posts()):
        the_post(); ?>

        <div class="post-preview">
          <h2 class="post-heading">
            <?php the_title(); ?>
            <span class="post-preview-info">
              <span class="post-preview-tags">
                <?php the_tags(); ?>
              </span>
              <span class="post-preview-date">
                <?php echo get_the_date(); ?>
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
          <div class="post-preview-content">
            <div class="post-preview-text-container">
              <div class="post-preview-text">
                <p>
                  <?php the_excerpt(); ?>
                </p>
              </div>
              <a class="post-preview-text-show-more" href="<?php the_permalink(); ?>"
                title="<?php the_title_attribute(); ?>">Zobacz więcej</a>

            </div>
            <?php
            the_post_thumbnail('post-thumbnail', ['class' => "post-preview-picture", 'title' => 'Feature image']);
            ?>
          </div>
        </div>
      <?php endwhile; else: ?>
      <article>
        <p>Sorry, no posts were found!</p>
      </article>
    <?php endif; ?>


  </section>
</main>
<?php
get_footer();
?>