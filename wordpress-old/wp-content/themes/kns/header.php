<!DOCTYPE html>
<html lang="pl">
<head>
  <!-- META -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Roland Nemec">
  <meta name="description" content="Strona internetowa koła naukowego slawistów.">
  <?php
    wp_head();
  ?>
  <link rel="shortcut icon" type="image/png" href="images/logo.png"/>
</head>
<body>
<nav id="navbar">
    <header id="logo-header">
      <div id="spinner-container">
        <div id="spinner"></div> 
      </div>
      <a href="index.php" id="logo-anchor">
        <img src="assets/images/logo.png" alt="logo" id="logo" />
        <!-- flags --> 
      </a>
      <img src="assets/images/flags-svg/bosnia.svg" alt="Bosnia" id="bosnia-flag" class="country-flag" />
      <img src="assets/images/flags-svg/bulgaria.svg" alt="Bulgaria" id="bulgaria-flag" class="country-flag" />
      <img src="assets/images/flags-svg/croatia.svg" alt="Chorwacja" id="croatia-flag" class="country-flag" />
      <img src="assets/images/flags-svg/czechia.svg" alt="Czechy" id="czech-flag" class="country-flag" />
      <img src="assets/images/flags-svg/macedonia.svg" alt="Macedonia" id="macedonia-flag" class="country-flag" />
      <img src="assets/images/flags-svg/montenegro.svg" alt="Montenegro" id="montenegro-flag" class="country-flag" />
      <img src="assets/images/flags-svg/poland.svg" alt="Polska" id="poland-flag" class="country-flag" />
      <img src="assets/images/flags-svg/serbia.svg" alt="Serbia" id="serbia-flag" class="country-flag" />
      <img src="assets/images/flags-svg/slovakia.svg" alt="Słowacja" id="slovakia-flag" class="country-flag" />
      <img src="assets/images/flags-svg/slovenia.svg" alt="Słowenja" id="slovenia-flag" class="country-flag" />
      <img src="assets/images/flags-svg/lusatia.svg" alt="Łużyce" id="lusatia-flag" class="country-flag" />
    </header>
    <h2 id="mobile-current-page"></h2>
    <ul id="nav-list">
      <li><a class="nav-link responsive-invisible" href="index.php">Strona główna</a></li>
      <li><a class="nav-link responsive-invisible" href="about.php">O nas</a></li>
      <li><a class="nav-link responsive-invisible" href="news.php">Aktualności</a></li>
      <li><a class="nav-link responsive-invisible" href="magazine.php">Czasopismo</a></li>
    </ul>
    <div class="menu-btn hidden">
      <div class="menu-btn-burger"></div>
    </div>
  </nav>
