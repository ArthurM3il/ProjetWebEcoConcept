document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('nav'); // nav est toujours null ici car il n'est pas encore dans le DOM

    // Fonction pour afficher le menu
    function showNav() {
        nav.style.display = 'flex'; // ou 'block' ou ce qui est approprié
        nav.style.transition = 'transform 0.3s ease-in-out'; // Appliquer la transition après l'affichage

        // Le reste de votre code pour ouvrir le menu (ajouter la classe 'open', etc.)
        burger.classList.toggle('open');
        nav.classList.toggle('open');

    }


    burger.addEventListener('click', showNav); // Appel à la fonction showNav au clic
});