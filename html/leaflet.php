<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Carte avec Leaflet</title>
    <link href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" rel="stylesheet"/>
    <link href="../CSS/style.css" rel="stylesheet"/>

    <style>
        #map {
            height: 500px;
            margin: 50px;
        }
    </style>
</head>

<body>
    <?php include '../html/header.php'; ?>
    <?php include '../html/footer.php'; ?>
    <div id="map"></div>
    <script src="https://kit.fontawesome.com/0ab69beb88.js" crossorigin="anonymous"></script>
    <script>
        // Initialiser la carte et la centrer sur une latitude et une longitude
        var map = L.map('map').setView([43.0866, 0.5732], 13); // Mes coordonnées à Montréjeau

        // Ajouter un fond de carte 
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Définition de l'icône de marqueur personnalisée
        var lotusIcon = L.icon({
            iconUrl: '../images/lotus2.png',
            iconSize: [38, 38], // Taille de l'icône
            iconAnchor: [19, 38], // Point d'ancrage de l'icône (au milieu en bas)
            popupAnchor: [-3, -38] // Point d'ancrage du popup (au-dessus de l'icône)
        });

        // Ajouter un marqueur à la carte
        L.marker([43.0866, 0.5732], { icon: lotusIcon }).addTo(map)
            .bindPopup('Montréjeau')
            .openPopup();

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "masseuse";

        // Créer une connexion
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Récupérer les données des masseuses
        $sql = "SELECT masseuse_nom, masseuse_prenom, masseuse_lat AS lat, masseuse_lon AS lng FROM masseuse";
        $result = $conn->query($sql);

        $masseuses = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $masseuses[] = $row;
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

        // Les données des masseuses bien-être depuis PHP
        let masseuses = <?php echo json_encode($masseuses); ?>;
        console.log(masseuses);

        // Ajouter des marqueurs à la carte
        masseuses.forEach(function(masseuse) {
            console.log(masseuse); // Affiche chaque masseuse dans la console
            L.marker([masseuse.lat, masseuse.lng], { icon: lotusIcon })
                .addTo(map)
                .bindPopup(masseuse.masseuse_nom);
        });
    </script>


    <script src="../BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/js/bootstrap.js"></script>

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
