<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: connexion.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La terre des anges - Admin</title>
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
<script src="../js/presentationManager-minified.js"></script>

<h3>Modification des contacts</h3>
<form id="Contact" method="post" action="">
    <label for="mail">Email</label>
    <input type="email" name="mail" id="mail" autocomplete="off" required>
    <label for="phone">Téléphone</label>
    <input type="text" name="phone" id="phone" autocomplete="off" required>
    <label for="Fb">Lien Facebook</label>
    <input type="text" name="Fb" id="Fb" autocomplete="off" required>
    <input type="submit" value="Modifier">
</form>

<a href="../index.php">Retour à l'accueil</a>
<script src="../js/contactManager-minified.js"></script>
</body>