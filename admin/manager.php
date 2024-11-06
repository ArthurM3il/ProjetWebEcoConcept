<?php
session_start();
#if (!isset($_SESSION['admin'])) {
    #header('Location: connexion.php');
    #exit();
#}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La terre des anges - Admin</title>
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="../css/mediaQueries-minified.css">
</head>
<body>
<h3>Ajout d'une image de description</h3>
<form id="Description" method="post" action="">
    <label for="image">Image :</label>
    <input type="file" name="image" id="image" autocomplete="off" required>
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre" autocomplete="off" required>
    <label for="desc">Description : </label>
    <textarea name="desc" id="desc" required rows="7"></textarea>
    <label for="prix">Prix</label>
    <input type="number" name="prix" id="prix" required>
    <input type="submit" value="Envoyer">
</form>
<script src="../js/descriptionManager-minified.js"></script>

<h3>Modification de la présentation</h3>
<form id="Presentation" method="post" action="">
    <label for="texte">Texte de présentation :</label>
    <textarea name="texte" id="texte" autocomplete="off" required rows="7" cols="20"></textarea>
    <input type="submit" value="Modifier">
</form>
<a href="../index.php">Retour à l'accueil</a>
<script src="../js/presentationManager-minified.js"></script>
</body>