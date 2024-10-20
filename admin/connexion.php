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
    <input type="text" name="login" id="login" required>
    <input type="submit" value="Connecter">
</form>
</body>
</html>