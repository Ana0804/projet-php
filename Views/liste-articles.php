<?php require_once __DIR__ . '/parts/header.php'; ?>


<h1>Articles</h1>

<div class="row">
    <?php foreach ($articles as $article) { ?>
    <div class="card" style="width: 18rem;">
        <img src="<?= $article->image ?>" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><?= $article->titre ?></h5>
            <p class="card-text"><?= $article->contenu ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <?php } ?>
</div>


<?php require_once __DIR__ . '/parts/footer.php'; ?>