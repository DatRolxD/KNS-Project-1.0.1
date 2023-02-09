<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Roland Nemec">
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="keywords" content="Koło Naukowe Slawistów, Uniwersytet Warszawski, Slawistyka, Slawistyka UW, UW">
  <?php
  wp_head();
  ?>
</head>

<body>

  <nav id="navbar">
    <header id="logo-header">
      <div id="spinner-container">
        <div id="spinner"></div>
      </div>
      <a href="<?php echo get_site_url() ?>" id="logo-anchor">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        if (has_custom_logo()) {
          echo '<img id="logo" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
        } else {
          echo '<h1>' . get_bloginfo('name') . '</h1>';
        }
        ?>
        <!-- flags -->
      </a>
      <img src="<?php echo get_theme_file_uri('aversion/images/flags-svg/bosnia.svg'); ?>" alt="Bosnia" id="bosnia-flag"
        class="country-flag" />
      <img src="<?php echo get_theme_file_uri('aversion/images/flags-svg/bulgaria.svg'); ?>" alt="Bulgaria"
        id="bulgaria-flag" class="country-flag" />
      <img src="<?php echo get_theme_file_uri('aversion/images/flags-svg/croatia.svg'); ?>" alt="Chorwacja"
        id="croatia-flag" class="country-flag" />
      <img src="<?php echo get_theme_file_uri('aversion/images/flags-svg/czechia.svg'); ?>" alt="Czechy" id="czech-flag"
        class="country-flag" />
      <img src="<?php echo get_theme_file_uri('aversion/images/flags-svg/macedonia.svg'); ?>" alt="Macedonia"
        id="macedonia-flag" class="country-flag" />
      <img src="<?php echo get_theme_file_uri('aversion/images/flags-svg/montenegro.svg'); ?>" alt="Montenegro"
        id="montenegro-flag" class="country-flag" />
      <img src="<?php echo get_theme_file_uri('aversion/images/flags-svg/poland.svg'); ?>" alt="Polska" id="poland-flag"
        class="country-flag" />
      <img src="<?php echo get_theme_file_uri('aversion/images/flags-svg/serbia.svg'); ?>" alt="Serbia" id="serbia-flag"
        class="country-flag" />
      <img src="<?php echo get_theme_file_uri('aversion/images/flags-svg/slovakia.svg'); ?>" alt="Słowacja"
        id="slovakia-flag" class="country-flag" />
      <img src="<?php echo get_theme_file_uri('aversion/images/flags-svg/slovenia.svg'); ?>" alt="Słowenja"
        id="slovenia-flag" class="country-flag" />
      <img src="<?php echo get_theme_file_uri('aversion/images/flags-svg/lusatia.svg'); ?>" alt="Łużyce"
        id="lusatia-flag" class="country-flag" />
    </header>
    <h2 id="mobile-current-page"></h2>
    <?php
    wp_nav_menu(
      array(
        'menu' => 'primary',
        'container' => '',
        'theme_location' => 'primary',
        'items_wrap' => '<ul id="nav-list">%3$s</ul>',
      )
    );
    ?>

    <div class="menu-btn hidden">
      <div class="menu-btn-burger"></div>
    </div>
  </nav>