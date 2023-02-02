<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Roland Nemec">
  <meta name="description" content="Strona internetowa koła naukowego slawistów.">
  <title>Koło Naukowe Slawistów</title>
  <link rel="stylesheet" href="styles/general.css">
  <link rel="shortcut icon" type="image/png" href="images/logo.png"/>
</head>
<body>

<?php include('content/blocks/navbar.php') ?>
  <main id="main-content">
    <section id="main-text-content">
      <article>
        <header>
          <h2 id="main-heading">Kim jesteśmy?</h2>
        </header>
        <div class="text-container">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </article>
      <article>
        <header>
          <h2 id="main-heading">Co robimy?</h2>
        </header>
        <div class="text-container">
          <div class="features-grid">
            <div class="feature-card">
              <h3 class="feature-heading">Propozycja #1</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
            <div class="feature-card">
              <h3 class="feature-heading">Propozycja #2</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
            <div class="feature-card">
              <h3 class="feature-heading">Propozycja #3</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
          </div>
        </div>
      </article>
      <article>
        <header>
          <h2 id="main-heading">Nasi ludzie</h2>
        </header>
        <div class="text-container">
          <div class="profiles">

            <div class="profile-card">
              <div class="profile-picture-container">
                <img class="profile-picture" src="images/profile-pictures/kot.jpg" alt="Zdjęcie Alusia Kota">
              </div>
              <div class="profile-text">
                <h3 class="profile-name">Aluś Kot</h3>
                <p class="function">Sekretarz</p>
                <p class="major">Slawistyka</p>
              </div>
            </div>

            <div class="profile-card">
              <div class="profile-picture-container">
                <img class="profile-picture" src="images/profile-pictures/kot.jpg" alt="Zdjęcie Alusia Kota">
              </div>
              <div class="profile-text">
                <h3 class="profile-name">Aluś Kot</h3>
                <p class="function">Sekretarz</p>
                <p class="major">Slawistyka</p>
              </div>
            </div>

          </div>
        </div>
      </article>
    </section>

  </main>
  <?php include('content/blocks/footer.php') ?>

  <script src="scripts/main.js"></script>
  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</body>
</html>