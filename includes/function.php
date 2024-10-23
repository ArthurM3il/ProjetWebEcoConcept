<?php
function getDescriptions($bdd) {
    if(!$bdd){
        die("Erreur de connexion à la BD".mysqli_connect_error());
    }
}

function getContact($bdd){
    if (!$bdd) {
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }

    $sql = "SELECT Email, Location, Phone, Facebook FROM Contact LIMIT 1";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    $row = $stmt->fetchObject();

    return $row; 
}
