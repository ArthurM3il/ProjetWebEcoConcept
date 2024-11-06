<?php
require 'bdd.php';
$texte = $_POST['texte'];

echo "Champ 1: " . $texte . "\n";
$texte = nl2br($texte);
if (!$bdd) {
   die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

$sql = "UPDATE `Presentation` SET `texte`='$texte' WHERE id = '1'";
$stmt = $bdd->prepare($sql);
$stmt->execute(); 
