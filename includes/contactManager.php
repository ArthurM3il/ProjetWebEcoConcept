<?php
require 'bdd.php';
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$fb = $_POST['Fb'];

echo "Champ 1: " . $mail . "\n";
echo "Champ 2: " . $phone ."\n";
echo "Champ 2: " . $fb ."\n";
if (!$bdd) {
   die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

$sql = "UPDATE `Contact` SET `Email`='$mail',`Phone`='$phone',`Facebook`='$fb' WHERE 1";
$stmt = $bdd->prepare($sql);
$stmt->execute(); 
