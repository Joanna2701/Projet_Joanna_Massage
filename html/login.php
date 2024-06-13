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

<style>
    body {
        background-color: #f4e9cd;
    }

    .login-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: opacity 0.3s ease;
        opacity: 0;
    }

    .login-container.show {
        opacity: 1;
    }
</style>



<body>

    <?php include '../html/header.php'; ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container" id="loginContainer">
                    <h2 class="mb-4">Connexion</h2>
                    <form method="post" action="" id="loginForm">
                        Nom d'utilisateur: <input type="text" name="username" required><br>
                        Mot de passe: <input type="password" name="password" required><br>
                        <input type="submit" value="Se connecter">
                    </form>

                    <div class="mb-3">
                        <label for="username" class="form-label">Nom d'utilisateur:</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>


                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </div>
            </div>
        </div>


    </div>
    </div>


    <?php include 'footer.php'; ?>

    <script>
        // Smoothly display login container
        window.addEventListener('DOMContentLoaded', function() {
            document.gtEleementById('loginContainer').classList.add('show');
        });
    </script>

    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>

    <script src="BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/js/bootstrap.js"></script>

    <script src="https://kit.fontawesome.com/0ab69beb88.js" crossorigin="anonymous"></script>

</body>

</html>