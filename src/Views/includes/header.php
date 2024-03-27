<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./assets/form-field-checker.js" defer></script>
    <script src="./assets/section-display.js" defer></script>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Montserrat:ital,wght@0,100..900;1,100..900&family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
    <title>Formulaire de réservation Music Vercors Festival</title>
</head>

<header>
    <img src="./assets/images/vercorsLogo.png" id="logo" alt="Vercors_Music_Festival_Logo" onclick="location.href='./index.php'">

    <?php
    session_start();
    if (isset($_SESSION['connected'])) {
    ?>
        <div id='dashboard' class="bouton">
            <a href="./dashboard.php">Tableau de bord</a>
        </div>
        <div id='deconnexion' class="bouton">
            <a href="./src/deconnexion.php">Deconnexion</a>
        </div>
    <?php } else { ?>
        <div id='connexion' class="bouton">
            <a href="./connexion.php">Connexion</a>
        </div>
    <?php } ?>
</header>