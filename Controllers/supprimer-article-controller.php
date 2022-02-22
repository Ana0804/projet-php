<?php

if (empty($_SESSION['identifiant']) || $_SESSION['identifiant'] != 'admin') die('Erreur 403');

if (empty($_GET['id'])) erreur(404);

require_once __DIR__ . '/../Models/Article.php';
$article = Article::retrieveByPK($_GET['id']);

if (empty($article)) erreur(404);

$article->delete();

redirection('liste');