<?php 
include_once('bdd.php');

// Vérifie si la requête POST est définie et non vide
if(isset($_POST['get_masseuses']) && !empty($_POST['get_masseuses'])) {
    // Récupère les "masseuse" de la base de données
    try {
        $sql = "SELECT masseuse_id, masseuse_nom, masseuse_prenom, masseuse_lat AS lat, masseuse_lon AS lng, masseuse_img, masseuse_website, masseuse_telephone 
                FROM masseuse";
        // Requête préparée pour éviter les injections SQL
        $result = $conn->prepare($sql);
        $result->execute();
        
        // Récupère les "masseuse" dans un tableau associatif
        $masseuses = $result->fetchAll(PDO::FETCH_ASSOC);
        $result->closeCursor();
        header('Content-Type: application/json');
        // Retourne les "masseuse" en JSON
        echo json_encode([
            'success' => true, 
            'masseuses' => $masseuses
        ]);
       
        // Gestion des erreurs
    } catch (PDOException $e) {
        echo json_encode([
            'success' => false,
            'error' => 'Database error: ' . $e->getMessage()
        ]);
    }
    exit();
}
?>