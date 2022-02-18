<?php require_once __DIR__ . '/parts/header.php'; ?>

<h1><?= $article->titre ?></h1>

<div class="row">
    <div class="col-4">
        <img src="<?= $article->image ?>" alt="" class="img-fluid thumbnail">
    </div>

    <div class="col-8">
        <dl>
            <dt>Titre</dt>
            <dd><?= $article->titre ?></dd>

            <dt>Description</dt>
            <dd><?= $article->contenu ?></dd>

            <dt>Date</dt>
            <dd><?= $article->date_de_publication ?></dd>
        </dl>
    </div>
</div>


<?php require_once __DIR__ . '/parts/footer.php'; ?>