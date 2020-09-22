<?php

$nbLetter= $_POST['nbLetter'];
$firstLettre=$_POST['firstLettre'];

function trouver_un_prenom($nbLetter,$firstLettre) {

    $prenoms = file("prenoms.txt", FILE_IGNORE_NEW_LINES);
    $choix = array();

    for ($i = 0; $i < count($prenoms); $i++) {
        if (strlen($prenoms[$i]) == $nbLetter && substr($prenoms[$i], 0, 1) == "$firstLettre") 
        array_push($choix, $prenoms[$i]);
    }

    ?>
    <p align="center">Résultats correspondant à la recherche<br/>
    <?php
    
    echo  "Nombre de lettres : $nbLetter <br>";
    echo  "1er lettre : $firstLettre <br>";

    for ($i = 0; $i < count($choix); $i++) {
        echo '<input type="button" value="'.$choix[$i].'" class="titre3bold"/>';
    }
}
trouver_un_prenom($nbLetter,$firstLettre);
    ?>
</p>
