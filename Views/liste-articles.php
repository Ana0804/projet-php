<?php require_once __DIR__ . '/parts/header.php'; ?>


<h1 class='text-center'>Articles</h1>

<div class="row d-flex justify-content-center">
    <?php foreach ($articles as $article) { ?>
    <div class="card" style="width: 18rem;">
        <img src="<?= $article->image ?>" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><?= $article->titre ?></h5>
            <p class="card-text"><?= $article->contenu ?></p>
            <a href="index.php?route=details&id=<?= $article->id ?>" class="btn btn-primary"><i class="bi bi-book"></i> Lire</a> <br>
            <a href="index.php?route=modifier&id=<?= $article->id ?>"><i class="bi bi-eraser"></i> Modifier</a>
            <a href="index.php?route=supprimer&id=<?= $article->id ?>" class="text-danger"><i class="bi bi-trash"></i> Supprimer</a>
        </div>
    </div>
    <?php } ?>
</div>


<?php require_once __DIR__ . '/parts/footer.php'; ?>