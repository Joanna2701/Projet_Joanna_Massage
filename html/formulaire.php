<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'config.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joanna Massage, massages à domicile</title>
    <link href="<?= BASE_URL; ?>/CSS/style.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .formulaire {
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff8e1;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .formulaire h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            width: 150px;
            /* même largeur pour tous les labels */
        }

        .btn-primary {
            background-color: #18535f;
            border: none;
        }

        .btn-primary:hover {
            background-color: #3dab97;
        }

        .d-grid {
            display: flex;
            justify-content: center;
        }

        .btn-primary {
            width: auto;
        }

        .form-textarea {
            height: 150px;
            /* Hauteur pour le champ Observations */
        }

        .toast {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 300px;
            z-index: 1060;
            display: block;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <?php
    $message = "";
    $messageType = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $to = "joanna_leprat@hotmail.fr";
        $subject = "Nouveau formulaire de contact";
        $pseudo = $_POST['inputEmail4'];
        $email = $_POST['inputPassword4'];
        $adresse = $_POST['inputAddress'];
        $codePostal = $_POST['inputAddress2'];
        $ville = $_POST['Ville'];
        $pays = $_POST['inputPays'];
        $observations = $_POST['observations'];
        $check = isset($_POST['gridCheck']) ? "Oui" : "Non";

        $message = "Nom d'utilisateur: $pseudo\nEmail: $email\nAdresse: $adresse\nCode Postal: $codePostal\nVille: $ville\nPays: $pays\nObservations: $observations\nMe tenir informé(e): $check";

        $headers = "From: $email";

        if (mail($to, $subject, $message, $headers)) {
            $message = "Votre formulaire a bien été envoyé !";
            $messageType = "success";
        } else {
            $message = "Erreur lors de l'envoi du formulaire. Veuillez réessayer.";
            $messageType = "danger";
        }
    }
    ?>

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <form class="formulaire" method="post">
            <h2>Pour tout besoin d'informations, laissez-nous votre demande :</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="form-label">Votre Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="inputEmail4" name="inputEmail4" placeholder="Nom d'utilisateur" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4" class="form-label">Votre email</label>
                    <input type="email" class="form-control" id="inputPassword4" name="inputPassword4" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress" class="form-label">Adresse postale</label>
                <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="avenue des Champs-Elysées" required>
            </div>
            <div class="form-group">
                <label for="inputAddress2" class="form-label">Code postal</label>
                <input type="text" class="form-control" id="inputAddress2" name="inputAddress2" placeholder="Code postal" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Ville" class="form-label">Ville</label>
                    <input type="text" class="form-control" id="Ville" name="Ville" placeholder="Paris" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPays" class="form-label">Pays</label>
                    <select id="inputPays" name="inputPays" class="form-control" required>
                        <option selected>Choisir...</option>
                        <option value="France">France</option>
                        <option value="United States">United States</option>
                        <option value="Canada">Canada</option>
                        <option value="Germany">Germany</option>
                        <option value="Australia">Australia</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="observations" class="form-label">Observations</label>
                <textarea class="form-control form-textarea" id="observations" name="observations" placeholder="Écrivez vos observations ici (max 500 caractères)" maxlength="500" required></textarea>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Me tenir informé(e)
                </label>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>
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
            document.addEventListener('DOMContentLoaded', function() {
                let toastEl = document.getElementById('toastMessage');
                toastEl.style.display = 'block';
            });
        </script>
    <?php endif; ?>
    <?php include 'footer.php'; ?>

    <script src="<?= BASE_URL; ?>/BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>

</html>
