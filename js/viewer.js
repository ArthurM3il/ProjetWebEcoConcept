document.addEventListener('DOMContentLoaded', function() {
const carouselContainer = document.getElementById('carousel-container');
const carousel = document.getElementById('carousel');
const prevButton = document.getElementById('prev-button');
const nextButton = document.getElementById('next-button');
const xmlPath = "./IMGViewer/IMGViewer.xml";
let images = [];
let currentImageIndex = 0;

fetch(xmlPath)
.then(response => {

   if (!response.ok) {
    throw new Error("Erreur HTTP: " + response.status);
   }
    return response.text();
})
.then(xmlString => {

  const parser = new DOMParser();
  const xmlDoc = parser.parseFromString(xmlString, "text/xml");
  const imageElements = xmlDoc.querySelectorAll("image");
  imageElements.forEach(image => {
    const imageUrl = image.textContent;
    images.push(imageUrl);
          // Créer l'élément image et l'ajouter au carrousel
    const imgElement = document.createElement('img');
    imgElement.src = imageUrl;
    imgElement.alt = image.getAttribute('alt') || 'Image du carrousel'; //  Utilisez l'attribut alt du XML s'il existe
    carousel.appendChild(imgElement);
  });
updateCarousel();
}).catch(error => {
console.error("Erreur lors du chargement des images:", error);
const errorMessage = document.createElement("p");
errorMessage.textContent = "Erreur lors du chargement des images.";
errorMessage.style.color = "red";
carouselContainer.appendChild(errorMessage)
carousel.classList.add("hidden"); // Masquer le carrousel
});

function updateCarousel(){
  const translateX = -currentImageIndex * carouselContainer.offsetWidth ;
  carousel.style.transform = `translateX(${translateX}px)`;
}
prevButton.addEventListener('click', () => {
  currentImageIndex = (currentImageIndex - 1 + images.length )  % images.length;
  updateCarousel();
});

nextButton.addEventListener('click', () => {
  currentImageIndex = (currentImageIndex + 1) % images.length;
  updateCarousel();
});
});