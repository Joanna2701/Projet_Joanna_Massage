
// On attend que le DOM soit chargé, on récupère les éléments du caroussel et les puces de navigation
document.addEventListener('DOMContentLoaded', function () {
    let items = document.querySelectorAll('.slider .item');
    let dots = document.querySelectorAll(".dot");
    let next = document.getElementById('next');
    let prev = document.getElementById('prev');

    // Définition de l'index de l'élément actif, ça sera la slide 3
    let active = 3;


    //  Fonction pour charger les slides , on initie à zéro et on boucle sur les slides
    function loadShow() {
        let stt = 0;
        items[active].style.transform = `none`;
        items[active].style.zIndex = 1;
        items[active].style.filter = 'none';
        items[active].style.opacity = 1;


        // Animation pour le côté droit "next"
        for (let i = active + 1; i < items.length; i++) {
            stt++;
            items[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
            items[i].style.zIndex = -stt;
            items[i].style.filter = 'blur(5px)';
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }
        stt = 0;


        // Animation pour le côté gauche "prev"
        for (let i = active - 1; i >= 0; i--) {
            stt++;
            items[i].style.transform = `translateX(${-120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
            items[i].style.zIndex = -stt;
            items[i].style.filter = 'blur(5px)';
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }

        // On initie les points de navigation en puces
        dots.forEach((dot, index) => {
            dot.onclick = function () {
                active = index;
                // On appelle la fonction loadShow pour charger les puces
                loadShow();
            };
        });

        // On enlève la classe active pour les puces
        dots.forEach((dot) => dot.classList.remove("active"));
        dots[active].classList.add("active");
    }

    loadShow();

    // On ajoute les événements pour les boutons next et prev
    next.onclick = function () {
        active = active + 1 < items.length ? active + 1 : active;
        loadShow();
    }

    prev.onclick = function () {
        active = active - 1 >= 0 ? active - 1 : active;
        loadShow();
    }
});
