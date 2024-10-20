<?php
session_start();
require '../includes/bdd.php';

if(isset($_POST['login'])) {
  // Vérification du login (requête BDD)
    // ...


    if ($login_valide) {
        $_SESSION['admin'] = true;
        header('Location: description.php');
        exit();
    } else {
        // Afficher un message d'erreur
        // ...
    }
}