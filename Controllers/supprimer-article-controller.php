<?php

if (empty($_GET['id'])) erreur(404);

require_once __DIR__ . '/../Models/Article.php';
$article = Article::retrieveByPK($_GET['id']);

if (empty($article)) erreur(404);

$article->delete();

redirection('liste');