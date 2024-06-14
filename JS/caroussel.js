
// On attend que le DOM soit chargé, on récupère les éléments du caroussel et les puces de navigation
document.addEventListener('DOMContentLoaded', function () {
    let items = document.querySelectorAll('.slider .item');
    let dots = document.querySelectorAll(".dot");
    let next = document.getElementById('next');
    let prev = document.getElementById('prev');

    // Définition de l'index de l'élément actif, ça sera la slide 3
    let active = 3;


    //  Fonction pour charger les slides , on réinitialise les slides
    function loadShow() {

        let stt = 0;

        items[active].style.transform = `none`;
        // On remet les slides à leur position initiale
        items[active].style.zIndex = 1;
        // On enlève les filtres et l'opacité
        items[active].style.filter = 'none';
    
        items[active].style.opacity = 1;


        // Animation pour le côté droit "next"
        for (let i = active + 1; i < items.length; i++) {
            // On incrémente le compteur
            stt++;
            // On applique la transformation, le déplacement est de 120px vers la droite, on réduit l'échelle de 0.2 et on applique une rotation de -1deg
            items[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
            // On définit le z-index
            items[i].style.zIndex = -stt;
            // On applique un filtre de flou
            items[i].style.filter = 'blur(5px)';
            // On définit l'opacité qui  va changer en fonction de la position
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }
        // On réinitialise le compteur
        stt = 0;


        // Animation pour le côté gauche "prev"
        for (let i = active - 1; i >= 0; i--) {
            stt++;

            // On applique la transformation, le déplacement est négatif de 120px vers la gauche, on réduit l'échelle de 0.2 et on applique une rotation de 1deg
            items[i].style.transform = `translateX(${-120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
            items[i].style.zIndex = -stt;
            items[i].style.filter = 'blur(5px)';
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }

        // On initie les points de navigation en puces
        dots.forEach((dot, index) => {
            // On ajoute un événement pour chaque puce
            dot.onclick = function () {
                // On définit l'index actif
                active = index;
                // On appelle la fonction loadShow pour charger les puces
                loadShow();
            };
        });

        // On enlève la classe active pour les puces
        dots.forEach((dot) => dot.classList.remove("active"));
        // On ajoute la classe active pour la puce active
        dots[active].classList.add("active");
    }

    // On appelle la fonction loadShow pour charger les slides
    loadShow();

    // On ajoute les événements pour les boutons next et prev
    next.onclick = function () {
        // On incrémente l'index actif
        active = active + 1 < items.length ? active + 1 : active;
        loadShow();
    }

    prev.onclick = function () {
        // On décrémente l'index actif
        active = active - 1 >= 0 ? active - 1 : active;
        loadShow();
    }
});
