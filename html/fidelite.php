<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once 'config.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joanna Massage, massages à domicile</title>
    <link href="<?= BASE_URL; ?>/CSS/style.css" rel="stylesheet">
    <link href="<?= BASE_URL; ?>/BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0ab69beb88.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<style>
    header {
        text-align: center;
        padding: 20px 0;
        background-color: #3dab97;
        color: #fff;
        border-radius: 8px 8px 0 0;
    }

    header h1 {
        margin: 0;
        text-decoration: underline;
    }

    section {
        margin: 20px 20px;
        font-weight: 600;
        font-size: 18px;
    }

    h2 {
        color: #18535f;
    }

    h3 {
        color: #18535f;
    }

    .avantages {
        margin: 20px;
        line-height: 2;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .avantage {
        background-color: #e8eaf6;
        padding: 40px;
        margin: 10px;
        border-radius: 8px;
        flex: 1 1 calc(33% - 40px);
        box-sizing: border-box;
    }

    .avantage img {
        max-width: 100%;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    @media (max-width: 768px) {
        .avantage {
            flex: 1 1 100%;
        }
    }

    @media (max-width: 480px) {
        header {
            padding: 15px 0;
        }

        section {
            margin: 10px;
            font-size: 16px;
        }

        .avantage {
            padding: 20px;
            margin: 5px;
        }
    }
</style>

<body>
    <?php include 'header.php'; ?>
    <div class="allcontainer">

        <header class="animate-on-scroll">
            <h1>Programme de Fidélité Cliente Privilège</h1>
        </header>
        <section class="animate-on-scroll">
            <h2>Principe du Programme</h2>
            <p>Notre programme de fidélité "Cliente Privilège" <img class="lotus" src="<?= BASE_URL; ?>/images/fleur-de-lotus.png" style="margin:5px;" width=4%> est conçu pour récompenser nos clientes les plus fidèles. Chaque massage réservé sur notre plateforme vous rapproche de récompenses exclusives. Voici comment cela fonctionne :</p>
            <ul>
                <li>À chaque massage réservé, accumulez des points de fidélité.</li>
                <li>Profitez de récompenses spéciales en atteignant certains paliers.</li>
                <li>Bénéficiez d'avantages exclusifs réservés à nos membres Privilège.</li>
            </ul>
        </section>
        <section class="animate-on-scroll">
            <h2>Avantages du Programme</h2>
            <div class="avantages">
                <div class="avantage animate-on-scroll">
                    <img src="<?= BASE_URL; ?>/images/massage-bienfaits.jpg" alt="Massage">
                    <h3>+20min de Massage Offertes</h3>
                    <p>Au cinquième massage réservé, profitez de 20 minutes supplémentaires gratuites pour une détente maximale.</p>
                </div>
                <div class="avantage animate-on-scroll">
                    <img src="<?= BASE_URL; ?>/images/massage5.png" alt="Produit Cosmétique">
                    <h3>Produit Cosmétique Offert</h3>
                    <p>Dès le dixième massage réservé, recevez une huile de massage en cadeau.</p>
                </div>
                <div class="avantage animate-on-scroll">
                    <img src="<?= BASE_URL; ?>/images/massage.png" alt="Offres Exclusives">
                    <h3>Offres Exclusives</h3>
                    <p>Accédez à des promotions et des offres réservées uniquement aux membres du programme "Cliente Privilège Premium".<img class="lotus" src="<?= BASE_URL; ?>/images/fleur-de-lotus.png" style="margin: 20px;" width=30%></p>
                </div>
            </div>
        </section>

        <script src="<?= BASE_URL; ?>/JS/classie.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const elements = document.querySelectorAll('.animate-on-scroll');
                elements.forEach((element, index) => {
                    element.style.animationDelay = `${index * 0.5}s`;
                    element.classList.add('animate__animated', 'animate__fadeInUp');
                });
            });
        </script>
    <?php include 'footer.php'; ?>
    </div>
</body>

</html>
