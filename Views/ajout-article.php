<?php require_once __DIR__ . '/parts/header.php'; ?>



<h1 class="text-center">Ajouter un article</h1>

<form method="post" action="index.php?route=ajout-handler">
    <div class="form-group row">
        <label for="titre" class="col-sm-12 col-form-label">Titre de l'article</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre..." required autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="auteur" class="col-sm-12 col-form-label">Nom de l'auteur</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="auteur" id="auteur" placeholder="Auteur..." required autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="image" class="col-sm-12 col-form-label">Image de l'article</label>
        <div class="col-sm-12">
            <input type="url" class="form-control" name="image" id="image" placeholder="Lien de l'image..." require>
        </div>
    </div>
    <div class="form-group row">
        <label for="contenu" class="col-sm-12 col-form-label">Contenu de l'article</label>
        <div class="col-sm-12">
            <textarea class="form-control" name="contenu" id="contenu" rows="3" placeholder="Contenu de l'article..." require></textarea>
      </div>
    </div>
    <div class="form-group row">
        <label for="date" class="col-sm-12 col-form-label">Date de publication</label>
        <div class="col-sm-12">
          <input type="date" id="date" name="date" require>
        </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12">
        <button type="submit" class="btn btn-success">Ajouter</button>
      </div>
    </div>
</form>




<?php require_once __DIR__ . '/parts/footer.php'; ?>