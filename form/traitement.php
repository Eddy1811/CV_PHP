

<?php


echo 'e';

$donnees =  filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS) ;
$donnees2 =  filter_input(INPUT_POST, 'actionDemandee', FILTER_SANITIZE_SPECIAL_CHARS) ;


if ($donnees == 1) {
    header ('Location:  resultat.php');
    include 'form.html';
}


echo $donnees;
echo "<br>";
echo $donnees2;



?>