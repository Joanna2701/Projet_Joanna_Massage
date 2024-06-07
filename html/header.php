<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<style>
    /* General styles for the menu */
    .cbp-spmenu {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        background: #99BADC;
        position: fixed;
    }

    .cbp-spmenu h3 {
        color: #18535f;
        font-size: 1.9em;
        padding: 20px;
        margin: 0;
        font-weight: 300;
        background: #0d77b6;
    }

    .cbp-spmenu a {
        display: block;
        color: #022B3A;
        font-size: 1.1em;
        font-weight: 300;
    }

    .cbp-spmenu a:hover {
        background: #022b3a;
        color: white;
        opacity: 1;
        transform: scale(1.1);
        transition: transform 0.4s ease-out;
    }

    .cbp-spmenu a:active {
        background: #afdefa;
        color: #47a3da;
    }

    /* Styles for the vertical menu */
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

    /* Vertical menu that slides from the left */
    .cbp-spmenu-left {
        left: -240px;
    }

    .cbp-spmenu-left.cbp-spmenu-open {
        left: 0px;
    }

    /* Push classes applied to the body */
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
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    /* Example media queries */
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

    /* Styles for the burger menu button */
    .menu-burger {
        position: absolute;
        top: 10px;
        left: 10px;
        display: inline-block;
        cursor: pointer;
        padding: 10px;
        background: none;
        border: none;
        outline: none;
        transition: transform 0.3s ease;
        margin-left: 10px;
    }

    .menu-burger div {
        width: 35px;
        height: 5px;
        background-color: #333;
        margin: 6px 0;
        transition: 0.4s;
    }

    /* Animation on hover */
    .menu-burger:hover div:nth-child(1) {
        transform: rotate(45deg) translate(6px, 6px);
    }

    .menu-burger:hover div:nth-child(2) {
        opacity: 0;
    }

    .menu-burger:hover div:nth-child(3) {
        transform: rotate(-45deg) translate(6px, -6px);
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Left Push Menu</title>
    <link rel="stylesheet" href="style.css">
</head>


<body class="cbp-spmenu-push">
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <h3><a href="../html/index.php">Menu</a></h3>
        <a href="../html/lesmassages.php">Les Massages</a>
        <a href="../PHP/leaflet.php">Trouver mon(ma) professionnel(le) près de chez moi</a>
        <a href="#">Programme Fidélité Premium <img class="lotus" src="../images/fleur-de-lotus.png" style="margin-left: 70px;" width=30%></a>
        <a href="#">M'inscrire / Me connecter</a>
        <a href="#">Réservations</a>
        <a href="formulaire.php">Contact</a>
    </nav>
    <div class="container">
        <div class="main">
            <section class="buttonset">
                <button id="showLeftPush" class="menu-burger">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
            </section>
        </div>
    </div>

    <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;

        showLeftPush.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
        };

        document.addEventListener("DOMContentLoaded", function() {
            // Ajoutez une classe au body lorsque la page est chargée
            document.body.classList.add("loaded");
        });
    </script>

    <script src="classie.js"></script>
    <script src="script.js"></script>

</body>

</html>