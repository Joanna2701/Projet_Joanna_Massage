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
    <form method="post" action="" style="margin-left:20px">
        Nom d'utilisateur: <input type="text" name="username" required><br>
        Email: <input type="email" name="email" required><br>
        Mot de passe: <input type="password" name="password" required><br>
        <input type="submit" value="S'inscrire">
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