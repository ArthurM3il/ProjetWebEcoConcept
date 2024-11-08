<?php
session_start();
require '../includes/bdd.php';

$username = $_POST['login'];
$password = $_POST['password'];

try {
    // Préparation de la requête
    $sql = "SELECT * FROM Users WHERE username = :login AND password = :mdp";
    $stmt = $bdd->prepare($sql);

    // Liaison des paramètres
    $stmt->bindParam(':login', $username, PDO::PARAM_STR);
    $stmt->bindParam(':mdp', $password, PDO::PARAM_STR);

    // Exécution de la requête
    $stmt->execute();

    // Vérification du nombre de résultats
    if ($stmt->rowCount() > 0) {
        $_SESSION['admin'] = true;
        echo json_encode(['success' => true]);
        exit();
    } else {
        echo json_encode(['success' => false, 'message' => "Nom d'utilisateur et mot de passe incorrects"]);
    }
} catch (PDOException $e) {
    // En cas d'erreur, affiche un message
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>