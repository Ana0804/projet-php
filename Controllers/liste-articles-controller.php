<?php 
include __DIR__ . '/../Models/Article.php';

function liste() {
    $articles = Article::all();
    
    include __DIR__ . '/../Views/liste-articles.php';
}

