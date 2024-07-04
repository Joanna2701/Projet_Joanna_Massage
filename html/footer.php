<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once 'config.php'; ?>
    <meta charset="UTF-8">
    <title>Footer Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://kit.fontawesome.com/0ab69beb88.js" crossorigin="anonymous" defer></script>
</head>

<body>
    <!-- Contenu du footer -->
    <footer id="footer">
        <div class="legal">
            <p>2024 Joanna Massage. Tous droits réservés. <a href="<?= BASE_URL; ?>/mentions-legales">Mentions Légales</a></p>
            <span><a href="<?= BASE_URL; ?>mailto:contact@joannamassage.fr">contact@joannamassage.fr</a></span>
        </div>
        <div class="social-icons">
            <a href="#" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="icon-container">
            <button id="backToTop" class="back-to-top" onclick="scrollToTop()">
                <i class="fa-solid fa-arrow-up"></i>
            </button>
        </div>
    </footer>

    <script>
        // Fonction pour remonter en haut de la page
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Afficher le bouton "back to top" quand on scroll
        window.addEventListener('scroll', function() {
            // On récupère le bouton "back to top"
            let backToTopButton = document.getElementById('backToTop');
            // Si on a scrollé de plus de 300px
            if (window.scrollY > 300) {
                backToTopButton.style.display = 'flex';
            } else {
                backToTopButton.style.display = 'none';
            }
        });
    </script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #18535f;
            margin: 0;
            transition: opacity 1.5s ease-in-out;
        }

        #footer {
            background-color: #f4e9cd;
            padding: 20px 0;
            margin-top: 100px;
            width: 100%;
            text-align: center;
            justify-content: center;
            border-top: 4px solid #022B3A;
            position: relative;
        }

        #footer a {
            color: #022B3A;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        #footer a:hover {
            color: #3dab97;
        }

        #footer .social-icons {
            margin: 20px 0;
        }

        #footer .social-icons a {
            font-size: 24px;
            margin: 0 10px;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        #footer .social-icons a:hover {
            transform: scale(1.2);
            color: #23cfb8;
        }

        #footer .icon-container {
            margin-top: 20px;
        }

        #footer .back-to-top {
            display: none;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #3dab97;
            border: 5px solid white;
            color: #022B3A;
            font-size: 25px;
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, transform 0.3s;
            animation: fadeIn 1s;
        }

        #footer .back-to-top:hover {
            background-color: white;
            color: #3dab97;
            border: 5px solid #3dab97;
            animation: bounce 1s;
        }

        #footer .back-to-top i {
            transition: transform 0.3s;
        }

        #footer .back-to-top:hover i {
            transform: translateY(-10px);
        }

        .fa-solid .fa-arrow-up {
            font-size: 60%;
            animation: bounce 1s;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-20px);
            }

            60% {
                transform: translateY(-10px);
            }
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .legal {
                text-align: center;
            }

            .legal p {
                margin: 10px 0;
            }

            .legal span {
                display: block;
                margin: 10px 0;
            }

            .social-icons a {
                font-size: 20px;
                margin: 0 5px;
            }

            .back-to-top {
                width: 50px;
                height: 50px;
                font-size: 20px;
                bottom: 20px;
                right: 20px;
            }
        }

        @media (max-width: 480px) {
            .legal {
                text-align: center;
            }

            .legal p {
                margin: 10px 0;
            }

            .legal span {
                display: block;
                margin: 10px 0;
            }

            .social-icons {
                margin: 10px 0;
            }

            .social-icons a {
                font-size: 18px;
                margin: 0 3px;
            }

            .back-to-top {
                width: 40px;
                height: 40px;
                font-size: 16px;
                bottom: 10px;
                right: 10px;
            }
        }
    </style>

</body>

</html>