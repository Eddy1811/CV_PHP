<?php

$page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_SPECIAL_CHARS);
$page = $page ?? "Accueil";


switch ($page) {
    case "Contact" :
        require 'pages/contact.php';
        break;

    case "Hobby" :
        require 'pages/Hobby.php';
        break;

    case "Accueil" :
        require 'pages/accueil.php';
        break;

    default :
        require 'pages/404.php';
}


