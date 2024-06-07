<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joanna Massage, massages à domicile</title>
    <link href="../CSS/style.css" rel="stylesheet">
    <link href="../BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0ab69beb88.js" crossorigin="anonymous"></script>
</head>

<style>
    body {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #F4E9CD;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    header {
        text-align: center;
        padding: 20px 0;
        background-color: #3dab97;
        color: #fff;
        border-radius: 8px 8px 0 0;
    }

    header h1 {
        margin: 0;
    }

    section {
        margin: 20px 0;
    }

    h2 {
        color: #18535f;
    }

    h3 {
        color: #18535f;
    }

    .avantages {
        margin:20px;
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
    }

    footer {
        text-align: center;
        padding: 10px;
        background-color: #6200ea;
        color: #fff;
        border-radius: 0 0 8px 8px;
    }

    @media (max-width: 768px) {
        .benefit {
            flex: 1 1 100%;
        }
    }
</style>

<body>
    <?php include '../html/header.php'; ?>

    <div class="container">
        <header>
            <h1>Programme de Fidélité Cliente Privilège</h1>
        </header>
        <section>
            <h2>Principe du Programme</h2>
            <p>Notre programme de fidélité "Cliente Privilège" <img class="lotus" src="../images/fleur-de-lotus.png" style="margin:5px;" width=4%>est conçu pour récompenser nos clientes les plus fidèles. Chaque massage réservé sur notre plateforme vous rapproche de récompenses exclusives. Voici comment cela fonctionne :</p>
            <ul>
                <li>À chaque massage réservé, accumulez des points de fidélité.</li>
                <li>Profitez de récompenses spéciales en atteignant certains paliers.</li>
                <li>Bénéficiez d'avantages exclusifs réservés à nos membres Privilège.</li>
            </ul>
        </section>
        <section>
            <h2>Avantages du Programme</h2>
            <div class="avantages">
                <div class="avantage">
                    <img src="../images/massage-bienfaits.jpg" alt="Massage">
                    <h3>+20min de Massage Offertes</h3>
                    <p>Au cinquième massage réservé, profitez de 20 minutes supplémentaires gratuites pour une détente maximale.</p>
                </div>
                <div class="avantage">
                    <img src="../images/massage.png" alt="Produit Cosmétique">
                    <h3>Produit Cosmétique Offert</h3>
                    <p>Dès le dixième massage réservé, recevez une huile de massage en cadeau.</p>
                </div>
                <div class="avantage">
                    <img src="../images/massage5.png" alt="Offres Exclusives">
                    <h3>Offres Exclusives</h3>
                    <p>Accédez à des promotions et des offres réservées uniquement aux membres du programme "Cliente Privilège Premium".<img class="lotus" src="../images/fleur-de-lotus.png" style="margin: 20px;" width=30%>
                    </p>
                </div>
            </div>
        </section>
    </div>

    <script src="../JS/classie.js"></script>

    <?php include '../html/footer.php'; ?>

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