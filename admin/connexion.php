<?php
session_start();
if (isset($_SESSION['admin'])) {
    header('Location: manager.php'); // Rediriger si déjà connecté
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
<form id="connexion" method="post">
    <label for="login">Login:</label>
    <input type="text" name="login" id="login" autocomplete="off" required>
    <label for="password">Mot de passe : </label>
    <input type="password" name="password" id="password" required>
    <input type="submit" value="Connecter">
</form>
<a href="../index.php">Retour à l'accueil</a>
<script src="../js/connexion-minfied.js"></script>
</script>
</body>
</html>