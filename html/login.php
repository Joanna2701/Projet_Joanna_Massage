<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once 'config.php'; ?>
    <title>Connexion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joanna Massage, massages à domicile</title>
    <link href="<?= BASE_URL; ?>/CSS/style.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            background-color: #fff8e1;
            font-family: 'Poppins', sans-serif;
            padding: 50px;
            height: 100%;
            width: 80%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .toast {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 300px;
            z-index: 1060;
        }

        .modal-content {
            background-color: #fff8e1;
            border-radius: 10px;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
        }

        .form-control {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #18535f;
            border: none;
        }   

        .btn-primary:hover {
            background-color: #3dab97;
        }

        .btn-secondary {
            background-color: #f4e9cd;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #f8f9fa;
        }

        .alert {
            margin-bottom: 0;
            border-color: red;
        }

        .modal-content {
            background-color: #f4e9cd;
        }

        .modal-header {
            border-bottom: 1px solid #18535f;
        }

        .modal-title {
            color: #18535f;
        }

        .modal-body {
            padding: 0;
        }

        .modal-footer {
            border-top: 1px solid #18535f;
        }

        .modal-footer .btn-secondary {
            background-color: #18535f;
        }

        .modal-footer .btn-secondary:hover {
            background-color: #3dab97;
        }

        .modal-footer .btn-secondary:focus {
            background-color: #3dab97;
        }

        .modal-footer .btn-secondary:active {
            background-color: #3dab97;
        }

        .modal-footer .btn-secondary:active:focus {
            background-color: #3dab97;
        }

        .modal-footer .btn-secondary:active:hover {
            background-color: #3dab97;
        }

    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <?php
    $message = "";
    $messageType = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            // Connexion à la base de données avec PDO
            $pdo = new PDO('mysql:host=localhost;dbname=masseuse', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Récupérer les données du formulaire
            $pseudo = $_POST['utilisateur_pseudo'];
            $email = $_POST['utilisateur_email'];
            $mdp = password_hash($_POST['utilisateur_mdp'], PASSWORD_BCRYPT);

            // Vérifier la longueur du mot de passe
            if (strlen($mdp) < 10 || strlen($mdp) > 100) {
                throw new Exception("Le mot de passe doit contenir 10 caractères minimum.");
            }

            // Hashage du mot de passe
            $mdp_hache = password_hash($mdp, PASSWORD_BCRYPT);

            // Préparer et exécuter la requête
            $stmt = $pdo->prepare("INSERT INTO utilisateur (utilisateur_pseudo, utilisateur_email, utilisateur_mdp) VALUES (?, ?, ?)");
            $stmt->execute([$pseudo, $email, $mdp]);

            $message = "Inscription réussie !";
            $messageType = "success";
        } catch (Exception $e) {
            $message = "Erreur : " . $e->getMessage();
            $messageType = "danger";
        }
    }
    ?>

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="row">
            <div class="col-md-6 offset-md-3 form-container">
                <h2>Mon compte</h2>
                <form method="post" action="" class="mb-4">
                    <div class="mb-3">
                        <label for="utilisateur_pseudo" class="form-label">Nom d'utilisateur</label>
                        <input type="text" name="utilisateur_pseudo" id="utilisateur_pseudo" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="utilisateur_email" class="form-label">Email</label>
                        <input type="email" name="utilisateur_email" id="utilisateur_email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="utilisateur_mdp" class="form-label">Mot de passe</label>
                        <input type="password" name="utilisateur_mdp" id="utilisateur_mdp" class="form-control" required minlength="10" maxlength="100">
                        <div id="passwordHelpBlock" class="form-text">
                            Votre mot de passe doit contenir entre 10 et 100 caractères.
                        </div>
                    </div>
                    <div class="d-grid">
                        <input type="submit" value="Me connecter" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php if (!empty($message)) : ?>
        <div class="toast align-items-center text-bg-<?= $messageType; ?>" id="toastMessage" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <?= $message; ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var toastEl = document.getElementById('toastMessage');
                var toast = new bootstrap.Toast(toastEl);
                toast.show();
            });
        </script>
    <?php endif; ?>

    <script src="<?= BASE_URL; ?>/BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/0ab69beb88.js" crossorigin="anonymous"></script>

    <?php include 'footer.php'; ?>
</body>

</html>