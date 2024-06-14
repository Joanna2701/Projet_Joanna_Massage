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
            width: 340px; /* Remplacez par la largeur souhaitée */
        }

        .cbp-spmenu-expanded.cbp-spmenu-left {
            left: -340px;
        }

        .cbp-spmenu-expanded.cbp-spmenu-left.cbp-spmenu-open {
            left: 0px;
        }

        /* Ajustements pour le menu burger quand le menu est élargi */
        .cbp-spmenu-push-toright-expanded {
            left: 340px; /* Correspond à la largeur du menu déployé */
        }

        @media screen and (max-width: 55.1875em) {
            .cbp-spmenu-expanded {
                width: 300px; /* Ajustement pour les petits écrans */
            }

            .cbp-spmenu-expanded.cbp-spmenu-left,
            .cbp-spmenu-push-toright-expanded {
                left: -300px;
            }

            .cbp-spmenu-expanded.cbp-spmenu-left.cbp-spmenu-open,
            .cbp-spmenu-push-toright-expanded {
                left: 300px;
            }
        }

        /* Style général du menu */
        .cbp-spmenu {
            font-family: 'Poppins', sans-serif;
            background: #f4e9cd;
            background-size: 800px 800px;
            color: black;
            position: fixed;
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
            color: black;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
        }

        .cbp-spmenu a:hover {
            font-family: 'Poppins', sans-serif;
            background: url('../images/pailette.jpg');
            background-repeat: repeat;
            background-size: 400px 400px;
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
            width: 240px;
            height: 100%;
            top: 0;
            z-index: 1000;
        }

        .cbp-spmenu-vertical a {
            border-bottom: 1px solid #258ecd;
            padding: 1em;
        }

        /* Style pour le left */
        .cbp-spmenu-left {
            left: -240px;
        }

        .cbp-spmenu-left.cbp-spmenu-open {
            left: 0px;
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

        /* Styles pour le bouton du menu burger */
        .menu-burger {
            position: absolute;
            top: 10px;
            left: 10px;
            color: #fff;
            display: inline-block;
            cursor: pointer;
            padding: 10px;
            background: #99BADC;
            border-radius: 4px;
            outline: none;
            transition: transform 0.3s ease;
            z-index: 1001; /* Assurez-vous que le bouton est au-dessus du menu */
            margin-left: 0; /* Ajustement pour éviter les décalages */
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
    </style>
</head>

<body class="cbp-spmenu-push">
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <img src="/Projet_Joanna_Massage/images/Joanna-Lotus1.png" class="logoheader" alt="logo" width="100%">
        <h5><a href="/Projet_Joanna_Massage/index.php">Menu</a></h5>
        <a href="/Projet_Joanna_Massage/html/lesmassages.php">Les Massages</a>
        <a href="/Projet_Joanna_Massage/html/leaflet.php">Trouver mon(ma) professionnel(le) près de chez moi</a>
        <a href="/Projet_Joanna_Massage/html/fidelite.php">Programme Fidélité Premium</a>
        <!-- Optionnel: le logo premium -->
        <!-- <img class="lotus" src="/projet_joanna_massage/images/fleur-de-lotus.png" style="margin-left: 70px;" width=20%> -->
        <a href="/Projet_Joanna_Massage/html/login.php">M'inscrire</a>
        <a href="/Projet_Joanna_Massage/html/register.php">Mon compte</a>
        <a href="/Projet_Joanna_Massage/html/formulaire.php">Contact</a>
    </nav>
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
        // Script pour l'animation menu
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;

        showLeftPush.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            classie.toggle(body, 'cbp-spmenu-push-toright-expanded');
            classie.toggle(menuLeft, 'cbp-spmenu-expanded');
        };

        document.addEventListener("DOMContentLoaded", function() {
            // Ajoute une classe au body lorsque la page est chargée
            document.body.classList.add("loaded");
        });
    </script>
</body>
</html>
