<?php
get_header();
?>
<main id="main-content">
  <div id="tooltip-container">
    <span id="i-button">?</span>
    <h3 id="info-heading">Mapa</h3>
    <p id="info-paragraph">Po kliknięciu na dany kraj zostaniesz przekierowany na stronę aktualności wybranego kraju.
    </p>
  </div>
  <section id="map-container">
    <?php include('content/blocks/svg-map.php') ?>
  </section>
</main>
<?php
get_footer();
?>