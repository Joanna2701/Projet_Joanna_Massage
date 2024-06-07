<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joanna Massage, massages à domicile</title>
    <link href="../CSS/style.css" rel="stylesheet">
    <link href="../BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
</head>

<header>
    <?php include 'header.php'; ?>
</header>

<body>
    <div class="container">
        <div class="titre">
            <!--<a href="boutique.html">Boutique</a>!-->
            <h1 class="h1">Joanna Massage</h1>
            <h2>Praticienne de bien-être à domicile,</h2>

            <h3>Hydrothérapeute, Spa Praticienne & Ayurvéda-Thérapeute certifiée</h3>

            <h4>"Le Toucher n'a jamais été conçu pour être un luxe. C'est un besoin humain fondamental." - Irene Smith .
            </h4>
        </div>



        <div class="paragraphe">
            <p>"S'offrir le bonheur, à portée de Mains"
                <br>
                <br>
                <span>Je vous offre une approche naturelle et cocooning du massage à travers différentes techniques du
                    Monde.</span>

            <div class="titre">
                <h1>Qui suis-je ?</h1>

                <h2>Mon histoire</h2>
            </div>
            </p>

            <p>Curieuse de nature et dès mon plus jeune âge, j’ai développé mon affinité avec le Massage, pour ainsi
                devenir une passion ; Ma passion qui allait m’accompagner jusqu’au premier jour du reste de ma vie.
                Une fois avoir été diplômée "Hydrothérapeute" et "Spa Praticienne" chez Thalatherm, j’ai aiguisé mes
                techniques venues du Monde en suivant une formation d’Ayurvéda Thérapeute, dont la médecine holistique
                indienne,la philosophie de vie et le massage m’ont toujours passionné.Aujourd’hui, à l’aube d’une trentaine de
                bougies et après une carrière de soins dans les thermes marins, j’ai décidé de suivre ce joli parcours qu’est l’entreprenariat au féminin.</p>

            <span>Aujourd'hui avec ces mains, j'écoute votre histoire, votre "schéma corporel", en remontant le chemin
                jusqu'à vos
                troubles présents...Avec un dos qui accumule tensions du quotidien, des cervicales qui ont besoin d'être
                "accompagnées",
                détendues pour recréer le mouvement dans son amplitude, etc...
                Je mets un point d'honneur à balayer d'un grand revers la pression sociale d'un corps imparfait, mais
                surtout, de construire une relation de con-fi-an-ce ensemble !
                Je vous propose donc de mettre entre mes mains, au service du bien-être, tout mon savoir-faire et mon
                écoute
                personnalisée dans le massage Sur-Mesure, qui correspondra à vos souhaits, vos attentes, votre santé
                musculaire,tissulaire et également votre état psycho-émotionnel.<br></span>
            <br>
            <p>A très bientôt.</p>
            <br>
            <p>Joanna.</p>


        </div>


        <!--caroussel en général en 1920px , 1200 par 720 px en height-->


        <div class="slider">
            <div class="item">
                <img src="../images/img2.jpg" alt="Slide 1">
                <h7>Joanna Massage</h7>
            </div>
            <div class="item">
                <img src="../images/thumbnail_IMG_20191203_115323.jpg" alt="Slide 2">
                <h7>Joanna Massage</h7>
            </div>
            <div class="item">
                <img src="../images/massage-bienfaits.jpg" alt="Slide 3">
                <h7>Joanna Massage</h7>
            </div>
            <div class="item">
                <img src="../images/img5.jpg" alt="Slide 4">
                <h7>Joanna Massage</h7>
            </div>
            <div class="item">
                <img src="../images/img2.jpg" alt="Slide 5">
                <h7>Joanna Massage</h7>
            </div>
            <div class="item">
                <img src="../images/thumbnail_AirBrush_20191103190154.jpg" alt="Slide 6">
                <h7>Joanna Massage</h7>
            </div>
            <div class="item">
                <img src="../images/thumbnail_IMG_20191203_114708.jpg" alt="Slide 7">
                <h7>Joanna Massage</h7>
            </div>
            <div class="item">
                <img src="../images/thumbnail_AirBrush_20190608204754.jpg" alt="Slide 8">
                <h7>Joanna Massage</h7>
            </div>
            <div class="item">
                <img src="../images/thumbnail_AirBrush_20191103190027.jpg" alt="Slide 9">
                <h7>Joanna Massage</h7>
            </div>
            <button id="next">></button>
            <button id="prev">
                < </button>
        </div>


        <script src="../JS/app.js"></script>

        <script src="../BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/js/bootstrap.js"></script>

        <script src="https://kit.fontawesome.com/0ab69beb88.js" crossorigin="anonymous"></script>

    </div>

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