<?php
$servername = "localhost"; // Remplacez par l'hôte de votre base de données
$username = "root";        // Nom d'utilisateur MySQL
$password = "";            // Mot de passe MySQL
$dbname = "ecommerce_db";      // Nom de la base de données

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
