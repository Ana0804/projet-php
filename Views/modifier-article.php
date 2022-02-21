<?php require_once __DIR__ . '/parts/header.php'; ?>

<h1 class="text-center">Modifier l'article</h1>

<form method="post">
    <div class="form-group row">
        <label for="titre" class="col-sm-12 col-form-label">Titre de l'article</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre..." value="<?= $article->titre ?>" required autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="auteur" class="col-sm-12 col-form-label">Nom de l'auteur</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="auteur" id="auteur" placeholder="Auteur..." value="<?= $article->auteur ?>" required autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="image" class="col-sm-12 col-form-label">Image de l'article</label>
        <div class="col-sm-12">
            <input type="url" class="form-control" name="image" id="image" placeholder="Lien de l'image..." value="<?= $article->image ?>" require>
        </div>
    </div>
    <div class="form-group row">
        <label for="contenu" class="col-sm-12 col-form-label">Contenu de l'article</label>
        <div class="col-sm-12">
            <textarea class="form-control" name="contenu" id="contenu" rows="3" placeholder="Contenu de l'article..." value="<?= $article->contenu ?>" require></textarea>
      </div>
    </div>
    <div class="form-group row">
        <label for="date" class="col-sm-12 col-form-label">Date de publication</label>
        <div class="col-sm-12">
          <input type="date" id="date" name="date" value="<?= $article->date ?>" require>
        </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12">
        <button type="submit" class="btn btn-success">Modifier</button>
      </div>
    </div>
</form>

<?php require_once __DIR__ . '/parts/footer.php'; ?>