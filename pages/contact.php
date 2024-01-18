<?php require 'header.php'; ?>

<main>
    <form class="bg-primary" action="http://cv_php.local/?page=Contact" method="post">
        <div class="nom">
            <label for="Nom"> Nom : </label>
            <input id="Nom" name="nomdefamille" type="text">
        </div>
        <div class="prenom">
            <label for="Prénom"> Prénom : </label>
            <input id="Prénom" name="prénom" type="text">
        </div>
        <div class="genre">
            proposition d’emploi : <input type="radio" name="Raisonducontact" value="proposition d’emploi">
            demande d’information : <input type="radio" name="Raisonducontact" value="demande d’information">
            prestations :<input type="radio" name="Raisodcontact" value="prestations">
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


    <?php
    echo "Nom : ";
    echo filter_input(INPUT_POST, 'nomdefamille', FILTER_DEFAULT), '<br>';
    echo "Civilité : ";
    echo filter_input(INPUT_POST, 'Civilite', FILTER_DEFAULT), '<br>';
    echo "Prénom : ";
    echo filter_input(INPUT_POST, 'prénom', FILTER_DEFAULT), '<br>';
    echo "Email : ";
    echo filter_input(INPUT_POST, 'email', FILTER_DEFAULT), '<br>';
    echo "Raison du contact : ";
    echo filter_input(INPUT_POST, 'Raisonducontact', FILTER_DEFAULT), '<br>';
    echo "Message : ";
    echo filter_input(INPUT_POST, 'probleme', FILTER_DEFAULT), '<br>', '<br>';





    if ($_POST ['nomdefamille'] != null) {
        echo filter_input(INPUT_POST, 'nomdefamille', FILTER_DEFAULT), '<br>';
    } else {
        echo 'Erreur valeur nomdefamille nulle', '<br>';
    }

    if ($_POST ['Civilite'] != null) {
        echo filter_input(INPUT_POST, 'Civilite', FILTER_DEFAULT), '<br>';
    } else {
        echo 'Erreur valeur Civilite nulle', '<br>';
    }

    if ($_POST ['prénom'] != null) {
        echo filter_input(INPUT_POST, 'prénom', FILTER_DEFAULT), '<br>';
    } else {
        echo 'Erreur valeur prénom nulle', '<br>';
    }


    if ($_POST ['email'] != null) {
        echo filter_input(INPUT_POST, 'email', FILTER_DEFAULT), '<br>';
    } else {
        echo 'Erreur valeur email nulle', '<br>';
    }
    if ($_POST ['Raisonducontact'] != null) {
        echo filter_input(INPUT_POST, 'Raisonducontact', FILTER_DEFAULT), '<br>';
    } else {
        echo 'Erreur valeur Raisonducontact nulle', '<br>';
    }
    if ($_POST ['probleme'] != null) {
        echo filter_input(INPUT_POST, 'probleme', FILTER_DEFAULT), '<br>';
    } else {
        echo 'Erreur valeur probleme nulle', '<br>';
    }


    $totalData = $_POST ['Civilite'] . '\n' . $_POST ['nomdefamille'] . $_POST ['prénom'] . $_POST ['email'] . $_POST ['Raisonducontact'] . $_POST ['probleme'];


    file_put_contents('contact/contact_Y-m-d-H-i-s.txt', $totalData);

    filter_input(INPUT_POST, 'Civilite', FILTER_DEFAULT);


    ?>


</main>


<?php require 'footer.php'; ?>
