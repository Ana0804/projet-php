<?php

session_start();

include_once 'functions.php';

include_once 'models/SimpleOrm.php';
$conn = new mysqli('localhost', 'root', '');

if ($conn->connect_error)
    die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

SimpleOrm::useConnection($conn, 'projet_php');

if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'home';

switch ($route) {
    case 'home':
        include __DIR__ . '/Controllers/home-controller.php';
        break;
    
    case 'liste':
        include __DIR__ . '/Controllers/liste-articles-controller.php';
        liste();
        break;

    case 'details':
        include __DIR__ . '/Controllers/details-article-controller.php';
        details();
        break;

    case 'ajout':
        include __DIR__ . '/Controllers/ajout-article-controller.php';
        ajout();
        break;

    case 'ajout-handler':
        include __DIR__ . '/Controllers/ajout-article-controller.php';
        ajout_handler();
        break;

    case 'modifier':
        include __DIR__ . '/Controllers/modifier-article-controller.php';
        break;

    default:
        die('Erreur 404');
}