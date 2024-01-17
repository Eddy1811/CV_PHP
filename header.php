<?php
$title = "blablabla";

if ($_GET['page'] == "Contact") {
    $title = "contactez-moi";
}else if ($_GET['page'] == "Hobby") {
    $title = "Voici mes hobby";
}
else $title = "mon Site CV";
?>

<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>
        <?= $title;
        ?>
    </title>
</head>

<body>
    <header>
        <h2>
            <a href="/?page=Hobby"><span class="aaa">Hobby</span></a>
        </h2>
        <h2>
            <a href="/?page=Contact"><span class="aaa">Contact</span></a>
        </h2>
        <h2>
            <a href="/?page=Accueil"><span class="aaa">Accueil</span></a>
        </h2>
    </header>



