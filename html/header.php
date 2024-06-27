<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'config.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    
    <style>
        /* Ajout d'une nouvelle classe pour le menu déployé */
        .cbp-spmenu-expanded {
            width: 510px; /* Largeur du menu élargie */
        }

        .cbp-spmenu-expanded.cbp-spmenu-left {
            left: -510px;
        }

        .cbp-spmenu-expanded.cbp-spmenu-left.cbp-spmenu-open {
            left: 20px;
        }

        /* Ajustements pour le menu burger quand le menu est élargi */
        .cbp-spmenu-push-toright-expanded {
            left: 510px; /* Correspond à la largeur du menu déployé */
        }

        @media screen and (max-width: 55.1875em) {
            .cbp-spmenu-expanded {
                width: 470px; /* Ajustement pour les petits écrans */
            }

            .cbp-spmenu-expanded.cbp-spmenu-left,
            .cbp-spmenu-push-toright-expanded {
                left: -470px;
            }

            .cbp-spmenu-expanded.cbp-spmenu-left.cbp-spmenu-open,
            .cbp-spmenu-push-toright-expanded {
                left: 470px;
            }
        }

        /* Style général du menu */
        .cbp-spmenu {
            font-family: 'Poppins', sans-serif;
            background: url('<?= BASE_URL; ?>/images/massage24.png'); 
            background-repeat: no-repeat;
            background-size: 650px 1500px;
            color: #18535f;
            position: fixed;
            padding-top:300px;
        }

        .cbp-spmenu h3 {
            color: #18535f;
            font-size: 28px;
            padding: 20px;
            margin: 0;
            font-weight: 300;
            background: #0d77b6;
        }

        .cbp-spmenu a {
            display: block;
            color: #18535f;
            text-decoration: none;
            font-size: 22px;
            font-weight: 400;
        }

        .cbp-spmenu a:hover {
            font-family: 'Poppins', sans-serif;
            background: #f4e9cd;
            color: black;
            opacity: 1;
            transform: scale(1.1);
            transition: transform 0.4s ease-out;
        }

        .cbp-spmenu a:active {
            background: #afdefa;
            color: #47a3da;
        }

        /* Style pour le vertical */
        .cbp-spmenu-vertical {
            width: 440px;
            height: 100%;
            top: 0;
            z-index: 1000;
        }

        .cbp-spmenu-vertical a {
            border-bottom: 1px solid gray;
            padding: 1em;
        }

        /* Style pour le left */
        .cbp-spmenu-left {
            left: -440px;
        }

        .cbp-spmenu-left.cbp-spmenu-open {
            left: 100px;
        }

        /* Style pour le push */
        .cbp-spmenu-push {
            overflow-x: hidden;
            position: relative;
            left: 0;
        }

        .cbp-spmenu-push-toright {
            left: 240px;
        }

        /* Transitions */
        .cbp-spmenu,
        .cbp-spmenu-push {
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        /* Media queries */
        @media screen and (max-width: 55.1875em) {
            .cbp-spmenu-vertical {
                font-size: 90%;
                width: 190px;
            }

            .cbp-spmenu-left,
            .cbp-spmenu-push-toright {
                left: -190px;
            }
        }

                /* Media queries */
                @media screen and (max-width: 768px) {
            .cbp-spmenu {
                background-size: cover;
                padding-top: 100px;
            }

            .cbp-spmenu-vertical {
                width: 100%;
            }

            .cbp-spmenu-left,
            .cbp-spmenu-push-toright {
                left: -100%;
            }

            .cbp-spmenu-left.cbp-spmenu-open {
                left: 0;
            }

            .cbp-spmenu-push-toright {
                left: 100%;
            }

            .cbp-spmenu a {
                font-size: 18px;
                padding: 10px;
            }

            .menu-burger {
                top: 20px;
                left: 20px;
                width: 40px;
                height: 40px;
            }

            .menu-burger div {
                width: 30px;
                height: 4px;
            }
        }

        @media screen and (max-width: 480px) {
            .cbp-spmenu {
                padding-top: 50px;
            }

            .cbp-spmenu a {
                font-size: 16px;
                padding: 8px;
            }

            .menu-burger {
                top: 15px;
                left: 15px;
                width: 35px;
                height: 35px;
            }

            .menu-burger div {
                width: 25px;
                height: 3px;
            }
        }

        /* Styles pour le bouton du menu burger */
        .menu-burger {
            position: absolute;
            top: 100px; 
            left: 160px; 
            display: inline-block;
            cursor: pointer;
            padding: 10px;
            background: #99BADC;
            border-radius: 4px;
            box-shadow: #18535f 0px 0px 10px;
            outline: none;
            transition: transform 0.3s ease;
            z-index: 1001; 
            margin-left: 0; 
        }

        .menu-burger div {
            width: 35px;
            height: 5px;
            background-color: #333;
            margin: 6px 0;
            transition: 0.4s;
        }

        

        /* Animation button burger hover */
        .menu-burger:hover div:nth-child(1) {
            transform: rotate(45deg) translate(6px, 6px);
        }

        .menu-burger:hover div:nth-child(2) {
            opacity: 0;
        }

        .menu-burger:hover div:nth-child(3) {
            transform: rotate(-45deg) translate(10px, -10px);
        }

        /* Style du logo */
        .logoheader {
            width: 80%;
            margin: 20px 20px;
            padding-left: 10px;
            display: block;
        }

        /* Style de la bordure verticale */
        .vertical-border {
            position: fixed;
            left: 0;
            top: 0;
            width: 25px; /* Largeur de la bordure */
            height: 100%;
            background: url('<?= BASE_URL; ?>/images/pailette.jpg');
            background-repeat: repeat;
            background-size: auto;
            z-index: 1002; 
            display: none; 
        }

        /* Bordure visible lorsque le menu est ouvert */
        .cbp-spmenu-open + .vertical-border {
            display: block;
        }

        /* Pousser la bordure avec le menu */
        .cbp-spmenu-push-toright-expanded + .vertical-border {
            left: 510px;
        }
    </style>
</head>

<body class="cbp-spmenu-push">
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <h5><a href="<?= BASE_URL; ?>/index.php">Menu</a></h5>
        <a href="<?= BASE_URL; ?>/html/lesmassages.php">Les Massages</a>
        <a href="<?= BASE_URL; ?>/html/leaflet.php">Trouver mon(ma) professionnel(le) près de chez moi</a>
        <a href="<?= BASE_URL; ?>/html/fidelite.php">Programme Fidélité Premium</a>
        <!-- Optionnel: le logo premium -->
        <!-- <img class="lotus" src="/projet_joanna_massage/images/fleur-de-lotus.png" style="margin-left: 70px;" width=20%> -->
        <a href="<?= BASE_URL; ?>/html/login.php">M'inscrire</a>
        <a href="<?= BASE_URL; ?>/html/register.php">Mon compte</a>
        <a href="<?= BASE_URL; ?>/html/formulaire.php">Contact</a>
    </nav>
    <div class="vertical-border"></div> <!-- Ajout de la bordure verticale -->
    <div class="container">
        <div class="main">
            <section class="buttonset">
                <button id="showLeftPush" class="menu-burger">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </button>
            </section>
        </div>
    </div>
    <script>
        // Script pour l'animation menu*
        
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body,
            verticalBorder = document.querySelector('.vertical-border');

        showLeftPush.onclick = function() {
            this.classList.toggle('active');
            body.classList.toggle('cbp-spmenu-push-toright');
            menuLeft.classList.toggle('cbp-spmenu-open');
            body.classList.toggle('cbp-spmenu-push-toright-expanded');
            menuLeft.classList.toggle('cbp-spmenu-expanded');
            verticalBorder.classList.toggle('visible');
        };

        document.addEventListener("DOMContentLoaded", function() {
            // Ajoute une classe au body lorsque la page est chargée
            document.body.classList.add("loaded");
        });
    </script>
</body>
</html>
