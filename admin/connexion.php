<?php
session_start();
if (isset($_SESSION['admin'])) {
    header('Location: description.php'); // Rediriger si déjà connecté
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Connexion administrateur</title>
<link rel="stylesheet" type="text/css" href="../css/form.css">
</head>
<body>
<h2>Connexion Administrateur</h2>
<form method="post" action="login.php">
    <label for="login">Login:</label>
    <input type="text" name="login" id="login" autocomplete="off" required>
    <label for="password">Mot de passe : </label>
    <input type="password" name="password" id="password" required>
    <input type="submit" value="Connecter">
</form>
<a href="../index.php">Retour à l'accueil</a>
</body>
</html>