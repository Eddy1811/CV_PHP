<?php

$familyName = filter_input(INPUT_POST, 'nomdefamille', FILTER_SANITIZE_SPECIAL_CHARS);
if (!empty($familyName)) {
    echo 'nom de famille :'.$familyName, '<br>';
} else {
    echo 'Erreur :  nom de famille obligatoire', '<br>';
}

$name = filter_input(INPUT_POST, 'prénom', FILTER_SANITIZE_SPECIAL_CHARS);
if (!empty($name)) {
    echo 'prénom : ' . $name, '<br>';
} else {
    echo 'Erreur : prénom obligatoire', '<br>';
}


$civility = filter_input(INPUT_POST, 'Civilite', FILTER_DEFAULT);

if ($civility == 'M.' || $civility == 'Mme') {
    echo "Civilité : " . $civility, '<br>';
} else {
    echo 'Erreur valeur Civilité mauvaise', '<br>';
}


$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
if (!empty($email)) {
    echo "Email :".$email,'<br>';
} else {
    echo 'Erreur valeur email mauvaise', '<br>';
}

$reason = filter_input(INPUT_POST, 'Raisonducontact', FILTER_DEFAULT);
if ($reason == "0" || $reason == "1" || $reason == "2") {
echo 'Raison du contact : '.$reason,'<br>';
} else {
    echo 'Erreur valeur Raisonducontact mauvaise ou nulle', '<br>';
}





$message = filter_input(INPUT_POST, 'probleme', FILTER_DEFAULT);
if (strlen($message)>4) {
    echo "Message : ".$message, '<br>';
} else {
    echo "Erreur message trop court", '<br>';
}






empty($familyName);
filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
filter_input(INPUT_POST, 'prénom', FILTER_VALIDATE_BOOLEAN);


file_put_contents('contact/contact_Y-m-d-H-i-s.txt', $_POST);

filter_input(INPUT_POST, 'Civilite', FILTER_DEFAULT);


?>
<?php require 'header.php'; ?>

<main>
    <form class="bg-primary" action="/?page=Contact" method="post">
        <div class="nom">
            <label for="Nom"> Nom : </label>
            <input id="Nom" name="nomdefamille" type="text">
        </div>
        <div class="prenom">
            <label for="Prénom"> Prénom : </label>
            <input id="Prénom" name="prénom" type="text">
        </div>
        <div class="genre">
            proposition d’emploi : <input type="radio" name="Raisonducontact" value="0">
            demande d’information : <input type="radio" name="Raisonducontact" value="1">
            prestations :<input type="radio" name="Raisonducontact" value="2">
        </div>
        <div class=vieux><label for="blabla">Civilité : </label>
            <select id="blabla" name="Civilite">
                <option>M.</option>
                <option>Mme</option>
            </select>
        </div>
        <div class="zone">
            <label for="listee">Votre message : </label>
            <textarea id="listee" name="probleme" rows="8" cols="30"></textarea>
        </div>
        <div class=""
        <label for="email">Votre email :</label>

        <input type="email" name="email" id="email" size="30"/>


        <button type="submit">Envoyer</button>
    </form>
    <br> <br>


</main>


<?php require 'footer.php'; ?>
