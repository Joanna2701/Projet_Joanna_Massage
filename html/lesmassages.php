<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joanna Massage, massages à domicile</title>
    <link href="../CSS/style.css" rel="stylesheet">
    <link href="../BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
</head>

<style>

    .card-title {
        color: #18535f;
    }

    .card-text .card-title {
        color: #18535f;

    }

    h2 {
        text-align: center;
        margin-top: 2rem;
        font-size: 2.5rem;
        color: #18535f;
    }

    h4.section-title {
        text-align: center;
        text-decoration: underline #99badc;
        margin-top: 2rem;
        font-size: 2rem;
        color: #18535f;
    }

    .card {
        background-color: #99badc;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .card:hover {
        transform: scale(1.2);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }


    .toutesmescards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 50px;
        padding: 1rem;
        padding-top: 150px;
        padding-bottom: 150px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .cardsvisage {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        padding: 1rem;
        padding-top: 50px;
        padding-bottom: 100px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .cardsspecifique {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        padding: 1rem;
        padding-top: 50px;
        padding-bottom: 200px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }


    /* Style pour la card Sportif plié/déplié */
    .card-text-sportif {
        height: 5em;
        overflow: hidden;
        transition: height 0.3s ease;
    }

    .card-text-sportif.expanded {
        height: auto;
    }

    .btn-sportif {
        background-color: transparent;
        border: none;
        cursor: pointer;
        font-size: 1.5em;
        padding: 0;
        margin-top: 10px;
    }

    .btn-sportif-primary:focus {
        outline: none;
    }

    .btn-sportif-primary i {
        transition: transform 0.3s ease;
    }

    .btn-sportif-primary.expanded i {
        transform: rotate(180deg);
    }

    /* Style pour le loader dans une modal */
    body.blur {
        filter: blur(5px);
        pointer-events: none;
    }

    .modal {
        display: flex;
        justify-content: center;
        align-items: flex-start; 
        position: fixed;
        padding-top: 200px;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        z-index: 1000;
    }

    .d-flex {
        display: flex;
    }

    .justify-content-center {
        justify-content: center;
    }

    .spinner-border {
        width: 5rem;
        height: 5rem;
        border: 0.25em solid currentColor;
        border-right-color: #3dab97;
        border-radius: 50%;
        animation: spinner-border 0.75s linear infinite;
    }

    @keyframes spinner-border {
        to {
            transform: rotate(360deg);
        }
    }

    .content {
        padding: 20px;
    }

    .animated {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 1.6s ease-out, transform 1.6s ease-out;
    }

    .animated.show {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<body>
    <?php include '../html/header.php'; ?>
    <div class="allcontainer">
        <!-- Loader dans une modal -->
        <div class="modal" id="loaderModal">
            <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>

        <h2>Les différentes prestations</h2>
        <h4 class="section-title">Les massages Corps</h4>


        <!-- Toutes les cards première section Corps -->
        <div class="toutesmescards animated">
            <div class="card" style="width: 18rem;">
                <img src="https://static.wixstatic.com/media/949c1e751af1412094ad2a760a2ff5d0.jpg/v1/fill/w_744,h_430,fp_0.53_0.48,q_80,usm_0.66_1.00_0.01,enc_auto/949c1e751af1412094ad2a760a2ff5d0.jpg" class="card-img-top" alt="Massage Californien">
                <div class="card-body">
                    <h5 class="card-title">Le Californien</h5>
                    <p class="card-text">Massage relaxant - Imaginé par des psychologues américains et prenant son inspiration dans les "vagues de Californie, il rassemble mouvements lents..doux...enveloppants... On l'Appelle le "Toucher du Coeur"</p>
                    <a href="#" class="btn btn-primary">Réserver</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://static.wixstatic.com/media/f6958d14939a4269901bd24be79563b0.jpg/v1/fill/w_744,h_430,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/f6958d14939a4269901bd24be79563b0.jpg" class="card-img-top" alt="Massage Suédois">
                <div class="card-body">
                    <h5 class="card-title">Suédois ou Massage des tissus profonds</h5>
                    <p class="card-text">Massage à la pression plus importante qui permets de dissiper les nœuds de tension musculaire dans le corps. Il sera particulièrement apprécié pour les personnes avec une activité physique soutenue.</p>
                    <a href="#" class="btn btn-primary">Réserver</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://static.wixstatic.com/media/a382886ed8c34e9e91b5cc4c1383682f.jpg/v1/fill/w_744,h_420,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/a382886ed8c34e9e91b5cc4c1383682f.jpg" class="card-img-top" alt="Massage Ayurvédique">
                <div class="card-body">
                    <h5 class="card-title">Massage Indien Ayurvédique - Abyanga</h5>
                    <p class="card-text">Basé sur la médecine Ayurvédique holistique qui considère l'humain dans une entité Corps et Esprit, ce massage revigorant prend soin de rétablir une énergie vitale constante et harmonieuse dans les canaux énergétiques du corps appelés Nadis.</p>
                    <a href="#" class="btn btn-primary">Réserver</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://static.wixstatic.com/media/a35aecb9d76b4ae39f68a92c19ffe590.jpg/v1/fill/w_744,h_420,fp_0.50_0.50,q_80,usm_0.66_1.00_0.01,enc_auto/a35aecb9d76b4ae39f68a92c19ffe590.jpg" class="card-img-top" alt="Massage Minceur">
                <div class="card-body">
                    <h5 class="card-title">Massage Minceur</h5>
                    <p class="card-text">Cette technique allie plusieurs manipulations de drainage, de palper-rouler et de percussions favorisant le déstockage des cellules graisseuses et la dés infiltration des tissus adipeux.</p>
                    <a href="#" class="btn btn-primary">Réserver</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://static.wixstatic.com/media/b2fd62711710407ca6704ee7dc1633c1.jpg/v1/fill/w_744,h_600,fp_0.50_0.50,q_85,usm_0.66_1.00_0.01,enc_auto/b2fd62711710407ca6704ee7dc1633c1.jpg" class="card-img-top" alt="Massage Deep Tissue">
                <div class="card-body">
                    <h5 class="card-title">Massage Deep Tissue "Spécial Sportif"</h5>
                    <div class="card-text-sportif" id="cardTextSportif">
                        <p>Méthode Américaine pratiqué avec une tenue confortable et ample, il est très apprécié des Sportifs et Athlètes soucieux de leur condition physique et de leur santé musculaire/articulaire/tissulaire. Grâce aux étirements passifs/actifs et la libération des fascias (les enveloppes musculaires souvent douloureuses), on observe une libération des tissus, une mobilité articulaire améliorée, une diminution des micro lésions musculaires après l'effort. Il peut être couplé à la pratique de sport à rythme intensif, ou donné avant un événement sportif/ après pour favoriser la récupération.</p>
                    </div>
                    <button class="btn-sportif btn-primary" id="toggleButton" onclick="toggleText()">
                        <i class="fa-solid fa-arrow-down"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Section Massage Visage -->
        <h4 class="section-title">Les massages Visage</h4>
        <div class="cardsvisage animated">
            <div class="card" style="width: 18rem;">
                <img src="https://static.wixstatic.com/media/6d1a1ebe80754b32b937794afc54aa59.jpg/v1/fill/w_744,h_600,fp_0.50_0.50,q_85,usm_0.66_1.00_0.01,enc_auto/6d1a1ebe80754b32b937794afc54aa59.jpg" class="card-img-top" alt="Massage du visage Kobido">
                <div class="card-body">
                    <h5 class="card-title">Massage Visage et Crânien - Kobido</h5>
                    <p class="card-text">Le massage du visage que je pratique tire tous ses bénéfices de la médecine ayurvédique indienne ; Il est relaxant, il apaise le brouillard mental, gomme toute la fatigue ressentie, raffermit et lisse les traits du visage, puis permets de relancer le flux énergétique en activant des points bien précis de digito-pression appelés Marmas.​</p>
                    <a href="#" class="btn btn-primary">Réserver</a>
                </div>
            </div>
        </div>

        <!-- Dernière card Signature -->
        <h4 class="section-title">Le Massage Signature <img src="../images/exclusif.png" style="width: 2%;"></h4>
        <div class="cardsspecifique animated">
            <div class="card" style="width: 18rem;">
                <img src="../images/echange.png" class="card-img-top" alt="Massage du visage Kobido">
                <div class="card-body">
                    <h5 class="card-title">Massage Soin Signature</h5>
                    <p class="card-text">Le concept "Sur Mesure" permet d'adapter le soin de façon précise en fonction de vos attentes et de vos besoins, qu'ils correspondent à une contrainte physique (dénouer vos tensions musculaires,etc...), ou d'ordre psycho-émotionnel (chasser la fatigue mentale, le niveau de stress oxydatif du quotidien,etc...).​</p>
                    <a href="#" class="btn btn-primary">Réserver</a>
                </div>
            </div>
        </div>

        <script>
        // Fonction pour le loader dans une modal 
        document.addEventListener("DOMContentLoaded", function() {
            // Ajouter la classe blur au body
            document.body.classList.add('blur');

            // Supprimer la modal et le blur après 3 secondes
            setTimeout(function() {
                document.getElementById('loaderModal').style.display = 'none';
                document.body.classList.remove('blur');

                // Animer les éléments un par un
                const animatedElements = document.querySelectorAll('.animated');
                animatedElements.forEach((element, index) => {
                    setTimeout(() => {
                        element.classList.add('show');
                    }, index * 300); // délai de 300ms entre chaque élément
                });
            }, 3000);
        });
        </script>

        <script>
        // Fonction pour le plié/déplié de la card Sportif
        function toggleText() {
            var cardTextSportif = document.getElementById("cardTextSportif");
            var button = document.getElementById("toggleButton");
            var icon = button.querySelector("i");

            if (cardTextSportif.classList.contains("expanded")) {
                cardTextSportif.style.height = cardTextSportif.scrollHeight + 'px'; // Set height to the full scroll height
                setTimeout(() => {
                    cardTextSportif.style.height = '5em'; // Collapse to original height
                }, 0);
                cardTextSportif.classList.remove("expanded");
                button.classList.remove("expanded");
                icon.classList.remove("fa-arrow-up");
                icon.classList.add("fa-arrow-down");
            } else {
                cardTextSportif.style.height = cardTextSportif.scrollHeight + 'px'; // Expand to full scroll height
                cardTextSportif.classList.add("expanded");
                button.classList.add("expanded");
                icon.classList.remove("fa-arrow-down");
                icon.classList.add("fa-arrow-up");
                setTimeout(() => {
                    cardTextSportif.style.height = 'auto'; // Reset height to auto after expansion
                }, 300); // Match the duration of the CSS transition
            }
        }
        </script>

        <script src="BS/bootstrap-5.3.3-examples/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
        <script src="https://kit.fontawesome.com/0ab69beb88.js" crossorigin="anonymous"></script>
        <script src="../JS/classie.js"></script>

        <?php include 'footer.php'; ?>

        <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        </script>
    <div>
</body>

</html>