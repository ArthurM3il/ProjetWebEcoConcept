<?php
require 'bdd.php';

$image = $_POST['image'];
$desc = $_POST['desc'];
$prix = $_POST['prix'];
$titre = $_POST['titre'];

$desc = nl2br($desc); #Concatener des <br> à la place des retours chariots classiques

echo "Champ 1: " . $image . "\n";
echo "Champ 2: " . $desc . "\n";
echo "Champ 3: " . $prix . "\n";

if (!$bdd) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

$sql = "INSERT INTO `Description`(`titre`, `description`, `image`, `prix`, `alt`) VALUES ('$titre','$desc','$image','$prix','$titre')";
$stmt = $bdd->prepare($sql);
$stmt->execute(); 
