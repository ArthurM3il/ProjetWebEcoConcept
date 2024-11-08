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

        const imgElement = document.createElement('img');
        imgElement.src = imageUrl;
        imgElement.alt = image.getAttribute('alt') || 'Image du carrousel';
        carousel.appendChild(imgElement);
      });

      //  Après le chargement des images, définissez la largeur du carrousel :
      carousel.style.width = `${images.length * 100}%`; // largeur totale pour toutes les images
      for(const img of carousel.querySelectorAll("img")) { //  largeur pour chaque image
        img.style.width = `${100 / images.length}%`;
      }


      updateCarousel();
    }).catch(error => {
      console.error("Erreur lors du chargement des images:", error);
      const errorMessage = document.createElement("p");
      errorMessage.textContent = "Erreur lors du chargement des images.";
      errorMessage.style.color = "red";
      carouselContainer.appendChild(errorMessage);
      carousel.style.display = "none"; // Masquer le carrousel plus efficacement
    });

  function updateCarousel() {
    carousel.style.transform = `translateX(-${currentImageIndex * (100 / images.length)}%)`;
  }

  prevButton.addEventListener('click', () => {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    updateCarousel();
  });

  nextButton.addEventListener('click', () => {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    updateCarousel();
  });
});