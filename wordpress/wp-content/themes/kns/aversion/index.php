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
    <div id="tooltip-container">
        <span id="i-button">?</span>
        <h3 id="info-heading">Mapa</h3>
        <p id="info-paragraph">Po kliknięciu na dany kraj zostaniesz przekierowany na stronę aktualności wybranego kraju.</p>
      </div>
    <section id="map-container">
      <?php include('content/blocks/svg-map.php') ?>
    </section>
  </main>

  <?php include('content/blocks/footer.php') ?>


  <script src="scripts/main.js"></script>
  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</body>
</html>