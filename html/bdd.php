<?php
error_reporting(E_ALL);
// Afficher les erreurs à l'écran
ini_set("display_errors", 1);

// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "masseuse";

// Créer la connexion
try {
    // Créer une connexion PDO
    $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
    // Paramétrer la connexion pour qu'elle renvoie les erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Afficher l'erreur
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
?>