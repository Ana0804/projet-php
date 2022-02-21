<?php

function redirection($route) {
    header('Location: index.php?route=' . $route);
    die;
}

function erreur(int $code = 500) {
    echo 'Erreur ' . $code;
    die;
}
