<?php
include __DIR__ . '/../Models/Article.php';

function ajout() {
    include __DIR__ . '/../Views/ajout-article.php';
}

function ajout_handler() {
    
    if (
        !empty($_POST['titre'])
        && !empty($_POST['auteur'])
        && !empty($_POST['image'])
        && !empty($_POST['contenu'])
        && !empty($_POST['date'])

        && filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false
    ) {

        $article = new Article;

        $article->titre = $_POST['titre'];
        $article->auteur = $_POST['auteur'];
        $article->image = $_POST['image'];
        $article->contenu = $_POST['contenu'];
        $article->date_de_publication = $_POST['date'];

        $article->save();

        redirection('liste');
    } else redirection('ajout');
}