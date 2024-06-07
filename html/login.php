<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connexion à la base de données
    $conn = new mysqli('localhost', 'root', '', 'masseuse');

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Récupérer les données du formulaire
    $username = $_POST['utilisateur_pseudo'];
    $password = $_POST['utilisateur_mdp'];

    // Préparer et exécuter la requête
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashed_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            // Stocker les informations de l'utilisateur dans la session
            $_SESSION['userid'] = $id;
            $_SESSION['username'] = $username;
            echo "Connexion réussie !";
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Nom d'utilisateur incorrect.";
    }

    // Fermer la connexion
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Connexion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joanna Massage, massages à domicile</title>
    <link href="../CSS/style.css" rel="stylesheet">
    <link href="../BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <?php include '../html/header.php'; ?>
    <h2>Connexion</h2>
    <form method="post" action="">
        Nom d'utilisateur: <input type="text" name="username" required><br>
        Mot de passe: <input type="password" name="password" required><br>
        <input type="submit" value="Se connecter">
    </form>

    <script src="BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/js/bootstrap.js"></script>

    <script src="https://kit.fontawesome.com/0ab69beb88.js" crossorigin="anonymous"></script>

    <?php include 'footer.php'; ?>


    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>

</body>

</html>