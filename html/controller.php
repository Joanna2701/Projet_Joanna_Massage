<?php 
include_once('bdd.php');
if(isset($_POST['get_masseuses']) && !empty($_POST['get_masseuses'])) {
    $sql = "SELECT masseuse_id, masseuse_nom, masseuse_prenom, masseuse_lat AS lat, masseuse_lon AS lng, masseuse_img ,masseuse_website, masseuse_telephone 
            FROM masseuse";
    $result = $conn->prepare($sql);
    $result->execute();
    $masseuses = $result->fetchAll(PDO::FETCH_ASSOC);
    $result->closeCursor();

    die(json_encode([
        'success' => true, 
        'masseuses' => $masseuses
    ]));
}
?>