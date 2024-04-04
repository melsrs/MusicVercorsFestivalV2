<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= HOME_URL ?>assets/js/form-field-checker.js" defer></script>
    <script src="<?= HOME_URL ?>assets/js/section-display.js" defer></script>
    <link rel="stylesheet" href="<?= HOME_URL ?>assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Montserrat:ital,wght@0,100..900;1,100..900&family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
    <title>Formulaire de réservation Music Vercors Festival</title>
</head>

<body>
<header>
    <img src="<?= HOME_URL ?>assets/images/vercorsLogo.png" id="logo" alt="Vercors_Music_Festival_Logo" onclick="location.href='<?= HOME_URL ?>'">

        <?php

        if (isset($_SESSION['connected'])) {
        ?>
            <div id='dashboard' class="boutonTableauBord">
                <a href="./dashboard.php">Tableau de bord</a>
            </div>
            <div id='deconnexion' class="boutonDeconnexion">
                <a href="./src/deconnexion.php">Deconnexion</a>
            </div>
        <?php } else { ?>
            <div id='connexion' class="boutonConnexion">
                <a href="connexion">Connexion</a>
            </div>
            <div id='connexion' class="boutonConnexion">
                <a href="connexion">Admin</a>
            </div>
        <?php } ?>
    </header>