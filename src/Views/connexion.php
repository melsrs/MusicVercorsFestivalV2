<?php
include __DIR__ .'/includes/header.php';
  
  if (isset($_SESSION['connected'])) {
    header('location:dashboard.php');
    exit;
  }

  ?>

    <form action="connexion" method="post" id="loginForm">
      <h1>Connexion</h1>
      <label for="password">Mot de passe :</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" name="soumission" class="bouton" value="Connexion" id="submitButton">
      <?php if(isset($_GET['error']) && $_GET['error'] == 21) { ?>
        <div class="message echec"><p>Mot de passe incorrect.</p></div>
      <?php } ?>
    </form>
</body>
</html>