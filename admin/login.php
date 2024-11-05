<?php
session_start();
require '../includes/bdd.php';

if(isset($_POST['login'])) {
    $username = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM Users WHERE username = :login AND mdp = :mdp";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':login', $username);
    $stmt->bindParam(':mdp', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $_SESSION['admin'] = true;
        header('Location: admin.php');
        exit();
    } else {
        $error_message = "Invalid login credentials.";
    }
}