<?php
$host = 'localhost';   
$user = 'root';   
$password = '';
$database = 'TerreDesAnges';

// Créer la connexion
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données";
}

