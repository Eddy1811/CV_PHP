<?php
var_dump($_GET);
$page = $_GET['page'];
$page = $page ?? "Accueil";

switch ($page) {
    case "Contact" :
        require 'contact.php';
        break;

    case "Hobby" :
        require 'Hobby.php';
        break;

    case "Accueil" :
        require 'accueil.php';
        break;

    default :
        require '404.php';
}

