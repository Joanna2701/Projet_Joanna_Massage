<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connexion à la base de données
    $conn = new mysqli('localhost', 'root', '', 'utilisateur');

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Préparer et exécuter la requête
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur : " . $stmt->error;
    }

    // Fermer la connexion
    $stmt->close();
    $conn->close();
}
?>

    <h2>Inscription</h2>
    <form method="post" action="">
        Nom d'utilisateur: <input type="text" name="username" required><br>
        Email: <input type="email" name="email" required><br>
        Mot de passe: <input type="password" name="password" required><br>
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>




</body>
</html>