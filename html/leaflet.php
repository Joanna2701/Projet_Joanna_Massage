<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once 'config.php'; ?>
    <meta charset="UTF-8">
    <title>Carte avec Leaflet</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link href="<?= BASE_URL; ?>../CSS/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<style>
    /* Style pour l'auto loader  */

    #preloader {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        filter: blur(5px);
    }

    .spinner {
        border: 8px solid rgba(0, 0, 0, 0.1);
        border-left-color: #3dab97;
        border-radius: 50%;
        width: 64px;
        height: 64px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    #map {
        height: 500px;
        margin: 150px;
        justify-content: center;
        align-items: center;
        display: flex;
        border: 6px solid #3dab97;
        border-radius: 4px;
        animation: fadeIn 1.6s ease-out;
    }

    /* Style de l'entête */


    /* .container {
        font-family: 'Poppins', sans-serif;
        margin: 10px;
        max-width: 1200px;
        animation: fadeIn 1.6s ease-out;
    } */

    .text-center {
        text-align: center;
        color: #022b3a;
        font-size: 28px;
    }

    .input-group-lg {
        font-family: 'Poppins', sans-serif;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 20px 0;
        width: 40%;
    }

    .input-group-text {
        display: flex;
        align-items: center;
        font-size: 1.5rem;
        padding: 10px;
    }

    .input-group-text i {
        font-size: 2rem;
        margin-right: 10px;
    }

    .form-control {
        font-size: 1.5rem;
        padding: 10px;
        flex: 1;
    }

    /* Style pour les cards */

    .card-deck {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .card {
        margin: 10px;
    }

    .card-title {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        color: #022b3a;
    }

    .card-text {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 18px;
        color: #3dab97;
    }

    #masseuseHeader,
    .btn-reserver {
        font-family: 'Pacifico', cursive;
        font-size: 30px;
        padding: 10px 20px;
        width: auto;
        border: 2px solid #3dab97;
        border-radius: 8px;
        background-color: #f8f9fa;
        display: inline-block;
        animation: fadeIn 1.6s ease-out;
        margin-bottom: 20px;
        text-align: center;
        color: #022b3a;
        cursor: pointer;
    }

    #sectioncommentaire h2 {
        font-family: 'Pacifico', cursive;
        font-size: 40px;
        color: #3dab97;
        text-decoration: underline;
        text-align: center;
        animation: fadeIn 1.6s ease-out;
    }

    #sectioncommentaire {
        font-family: 'Poppins', sans-serif;
        margin: 50px;
        max-width: 80%;
        animation: fadeIn 1.6s ease-out;
    }

    #sectioncommentaire h3 {
        text-align: center;
        font-family: 'Poppins', sans-serif;
        font-size: 30px;
        color: #022b3a;
    }

    .leaflet-popup-content {
        max-height: 300px;
        overflow-y: auto;
    }

    .animated {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 1.6s ease-out, transform 1.6s ease-out;
    }

    .animated.show {
        opacity: 1;
        transform: translateY(0);
        transition: opacity 1.6s ease-out, transform 1.6s ease-out;
    }

    .popup-content {
        text-align: center;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        padding: 10px;
    }

    .popup-content img {
        width: 150px;
        height: 180px;
        border-radius: 10%;
        margin-bottom: 10px;
    }

    .popup-content h3 {
        display: flex;
        font-family: 'Pacifico', cursive;
        margin: 5px 0;
        font-size: 18px;
    }

    .popup-content p {
        margin: 5px 0;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 14px;
    }

    .popup-content a {
        color: #007bff;
        text-decoration: none;
    }

    .popup-content a:hover {
        text-decoration: underline;
    }

    #comments {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 20px;
        animation: fadeIn 1.6s ease-out;
    }

    /* Style pour le calendrier */

    #calendarPopup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: white;
        border: 2px solid #3dab97;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        animation: fadeIn 1s ease-out;
    }

    #reserveButton {
        margin: 10px;
        font-family: 'Popins', sans-serif;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    #reserveButton:hover {
        margin: 10px;
        font-family: 'Popins', sans-serif;
        background-color: #18535f;
        color: white;
        transform: scale(1.1);
        animation: fadeIn 1.6s ease-out;
    }

    .btncroirouge {
        color: red;
        font-weight: 900;
        font-size: 20px;
        background-color: white;
        border: none;
        cursor: pointer;
        display: flex;
        justify-content: flex-end;
    }
</style>

<body>
    <div class="allcontainer">
        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>

        <?php include '../html/header.php'; ?>
        <div class="allcontainer">
            <div class="container">
                <h1 class="text-center">Se géolocaliser :</h1>
                <p class="text-center">Retrouvez vos professionnel(le)s près de chez vous !</p>

                <!-- Champ pour adresse -->
                <div class="input-group-lg">
                    <div class="input-group-text">
                        <i class="fa-regular fa-address-card"></i> Adresse:
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Toulouse Cedex...">
                </div>
            </div>

            <div id="map"></div>
            <!-- Pop-up du calendrier -->
            <div id="calendarPopup">
                <h3>Choisissez une date pour votre réservation</h3>
                <button class="btncroirouge" onclick="closeCalendarPopup()">X</button>
                <div id="datepicker"></div>
                <button class="btn btn-secondary" onclick="closeCalendarPopup()">Fermer</button>
            </div>
            <div id="sectioncommentaire">
                <h2>Commentaires</h2>
                <div id="comments"></div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/0ab69beb88.js" crossorigin="anonymous" defer></script>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="<?= BASE_URL; ?>../JS/classie.js" defer></script>

        <script>
            $(function() {
                $("#datepicker").datepicker({
                    onSelect: function(dateText) {
                        window.location.href = 'login.php?date=' + dateText;
                    }
                });
            });

            function loadGoogleMapsAPI(callback) {
                var script = document.createElement('script');
                script.src = `https://maps.googleapis.com/maps/api/js?key=AIzaSyCb6ypZ01_IMAGo2Oi_dxl6CQC15ZcxNEY&libraries=places&callback=${callback}`;
                script.async = true;
                script.defer = true;
                document.head.appendChild(script);
            }

            function getPlaceId(masseuse, callback) {
                var service = new google.maps.places.PlacesService(document.createElement('div'));
                var request = {
                    query: masseuse.masseuse_nom + " " + masseuse.masseuse_prenom,
                    fields: ['place_id'],
                    locationBias: {
                        lat: Number(masseuse.lat),
                        lng: Number(masseuse.lng)
                    }
                };
                service.findPlaceFromQuery(request, function(results, status) {
                    if (status === google.maps.places.PlacesServiceStatus.OK && results.length > 0) {
                        callback(results[0].place_id);
                    } else {
                        console.error(`Erreur de récupération du placeId pour ${masseuse.masseuse_nom}`);
                        callback(null);
                    }
                });
            }

            function getGoogleReviews(placeId, callback) {
                if (!placeId) {
                    callback([]);
                    return;
                }
                var service = new google.maps.places.PlacesService(document.createElement('div'));
                service.getDetails({
                    placeId: placeId
                }, function(place, status) {
                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                        callback(place.reviews);
                    } else {
                        console.error(`Erreur de récupération des avis pour le placeId: ${placeId}`);
                        callback([]);
                    }
                });
            }

            function initMap() {
                var map = L.map('map').setView([43.0866, 0.5732], 8);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                var lotusIcon = L.icon({
                    iconUrl: '../images/lotus2.png',
                    iconSize: [38, 38],
                    iconAnchor: [19, 38],
                    popupAnchor: [0, -38]
                });

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "masseuse";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT masseuse_id, masseuse_nom, masseuse_prenom, masseuse_lat AS lat, masseuse_lon AS lng, masseuse_img ,masseuse_website, masseuse_telephone FROM masseuse";
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

                let masseuses = <?php echo json_encode($masseuses); ?>;
                console.log(masseuses);

                function createPopupContent(masseuse) {
                    return `
                    <div class="popup-content">
                        <img src="${masseuse.masseuse_img}" alt="${masseuse.masseuse_nom}">
                        <h3>${masseuse.masseuse_nom} ${masseuse.masseuse_prenom}</h3>
                        <p>Téléphone: ${masseuse.masseuse_telephone}</p>
                        <p><a href="${masseuse.masseuse_website}" target="_blank">Visitez le site web</a></p>
                    </div>
                `;
                }

                masseuses.forEach(function(masseuse) {
                    var marker = L.marker([masseuse.lat, masseuse.lng], {
                        icon: lotusIcon
                    }).addTo(map);

                    marker.bindPopup(createPopupContent(masseuse));

                    marker.on('click', function() {
                        console.log(`Fetching placeId for masseuse: ${masseuse.masseuse_nom}`);
                        getPlaceId(masseuse, function(placeId) {
                            if (placeId) {
                                console.log(`Fetching reviews for placeId: ${placeId}`);
                                getGoogleReviews(placeId, function(reviews) {
                                    var commentsContainer = document.getElementById('comments');
                                    var masseuseHeader = document.getElementById('masseuseHeader');
                                    if (!masseuseHeader) {
                                        masseuseHeader = document.createElement('h3');
                                        masseuseHeader.id = 'masseuseHeader';
                                        document.getElementById('sectioncommentaire').insertBefore(masseuseHeader, commentsContainer);
                                    }
                                    masseuseHeader.textContent = `${masseuse.masseuse_nom} ${masseuse.masseuse_prenom}`;
                                    masseuseHeader.innerHTML = `${masseuse.masseuse_nom} ${masseuse.masseuse_prenom} <img src="<?= BASE_URL; ?>../images/etoile.png" style="width: 2%;"><img src="<?= BASE_URL; ?>../images/etoile.png" style="width: 2%;"><img src="<?= BASE_URL; ?>../images/etoile.png" style="width: 2%;"><img src="<?= BASE_URL; ?>../images/etoile.png" style="width: 2%;"><img src="<?= BASE_URL; ?>../images/etoilenoire.png" style="width: 2%;">`;
                                    masseuseHeader.style.textAlign = 'center';

                                    commentsContainer.classList.remove('show');

                                    // Ajouter le bouton "Réserver" après le h3
                                    var reserveButton = document.createElement('button');
                                    reserveButton.className = 'btn-reserver';
                                    reserveButton.innerHTML = '<i class="fas fa-calendar-alt"></i> Réserver avec ce(tte) professionnel(le)';
                                    reserveButton.onclick = function() {
                                        openCalendarPopup();
                                    };

                                    if (!document.getElementById('reserveButton')) {
                                        reserveButton.id = 'reserveButton';
                                        masseuseHeader.insertAdjacentElement('afterend', reserveButton);
                                    }

                                    setTimeout(function() {
                                        commentsContainer.innerHTML = '';

                                        if (reviews.length > 0) {
                                            reviews.forEach(function(review) {
                                                var reviewElement = document.createElement('div');
                                                reviewElement.classList.add('col-md-4');
                                                reviewElement.innerHTML = `
                                                <div class="card-body">
                                                    <h5 class="card-title">${review.author_name}</h5>
                                                    <p class="card-text">${review.text}</p>
                                                </div>
                                            `;
                                                commentsContainer.appendChild(reviewElement);
                                            });
                                        } else {
                                            var noComments = document.createElement('div');
                                            noComments.classList.add('col-md-12');
                                            noComments.innerHTML = `
                                            <div class="card mb-3" style="width: 18rem;">
                                                <div class="card-body">
                                                    <h5 class="card-title">Aucun commentaire trouvé</h5>
                                                    <p class="card-text">Il n'y a pas encore de commentaires pour cette masseuse.</p>
                                                </div>
                                            </div>
                                        `;
                                            commentsContainer.appendChild(noComments);
                                        }

                                        commentsContainer.classList.add('show');
                                    }, 500);
                                });
                            } else {
                                var commentsContainer = document.getElementById('comments');
                                commentsContainer.classList.remove('show');

                                setTimeout(function() {
                                    commentsContainer.innerHTML = '';
                                    var noPlaceId = document.createElement('div');
                                    noPlaceId.classList.add('col-md-12');
                                    noPlaceId.innerHTML = `
                                    <div class="card-body">
                                        <h5 class="card-title">Aucun commentaire trouvé</h5>
                                        <p class="card-text">Aucun commentaire trouvé pour ${masseuse.masseuse_nom} ${masseuse.masseuse_prenom}.</p>
                                    </div>
                                `;
                                    commentsContainer.appendChild(noPlaceId);

                                    commentsContainer.classList.add('show');
                                }, 500);
                            }
                        });
                    });
                });
            }

            document.addEventListener('DOMContentLoaded', (event) => {
                loadGoogleMapsAPI('initMap');
            });

            function openCalendarPopup() {
                document.getElementById('calendarPopup').style.display = 'block';
            }

            function closeCalendarPopup() {
                document.getElementById('calendarPopup').style.display = 'none';
            }

            window.onclick = function(event) {
                let calendarPopup = document.getElementById('calendarPopup');
                if (event.target == calendarPopup) {
                    calendarPopup.style.display = 'none';
                }
            }
        </script>

        <script>
            // Preloader
            window.onload = function() {
                setTimeout(function() {
                    document.getElementById('preloader').style.display = 'none';
                }, 2000);
            };
        </script>

        <?php include '../html/footer.php'; ?>

        <script src="<?= BASE_URL; ?>../BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/js/bootstrap.js" defer></script>
        <script>
            function scrollToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        </script>
    </div>
</body>

</html>