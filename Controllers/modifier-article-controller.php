<?php 

if (empty($_SESSION['identifiant']) || $_SESSION['identifiant'] != 'admin') die('Erreur 403');

if (empty($_GET['id'])) erreur(404);

require_once __DIR__ . '/../Models/Article.php';
$article = Article::retrieveByPK($_GET['id']);

if (empty($article)) erreur(404);

if (!empty($_POST)) {
    
    if(
        !empty($_POST['titre'])
        && !empty($_POST['auteur'])
        && !empty($_POST['image'])
        && !empty($_POST['contenu'])
        && !empty($_POST['date'])

        && filter_var($_POST['image'], FILTER_VALIDATE_URL) !==false
    ) {

        $article->titre = $_POST['titre'];
        $article->auteur = $_POST['auteur'];
        $article->image = $_POST['image'];
        $article->contenu = $_POST['contenu'];
        $article->date = $_POST['date'];

        $article->save();

        redirection('liste');
    } else $error = true;
}

include __DIR__ . '/../Views/modifier-article.php';