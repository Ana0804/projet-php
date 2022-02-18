<?php

function redirection($route) {
    header('Location: index.php?route=' . $route);
    die;
}