<?php 

include __DIR__ . '/../Models/Article.php';


function details() {
    if (empty($_GET['id'])) die('Erreur 404');

    $article = Article::retrieveByPK($_GET['id']);

    if (empty($article)) die('Erreur 404');

    include __DIR__ . '/../Views/details-article.php';
}