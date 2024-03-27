<?php

include_once __DIR__ . '/Includes/header.php';

include_once __DIR__ . '/Includes/colonne.php';
?>
<div class="content">
  <?php
  switch ($section) {
    case 'reservation':
      switch ($action) {
        case 'new':
          include_once __DIR__ . '/Film/FormFilm.php';
          break;

        case 'details':
          include_once __DIR__ . '/Film/DetailsFilm.php';
          break;

        default:
          include_once __DIR__ . '/Film/ListeFilms.php';
          break;
      }
      break;

    default:
      include_once __DIR__ . '/Film/ListeFilms.php';
      break;
  }
  ?>
</div>
<?php
include_once __DIR__ . '/Includes/footer.php';
