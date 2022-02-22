<?php require_once __DIR__ . '/parts/header.php'; ?>

<h1 class="text-center">Connexion</h1>

<form method="post" action="index.php?route=connexion-handler">
  <div class="mb-3">
    <label for="login" class="form-label">Identifiant</label>
    <input type="text" class="form-control" name="login" id="login" required autofocus>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" name="password" id="password" required>
  </div>
  <button type="submit" class="btn btn-warning">Connexion</button>
</form>



<?php require_once __DIR__ . '/parts/footer.php'; ?>