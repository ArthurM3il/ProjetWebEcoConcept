// Fonction pour inclure le header et le footer
function includeHTML() {
    // Chargement du header depuis le dossier Layout
    fetch("Layouts/header.html")
      .then(response => response.text())
      .then(data => {
        document.getElementById("header-placeholder").innerHTML = data;
      });
  
    // Chargement du footer depuis le dossier Layout
    fetch("Layouts/footer.html")
      .then(response => response.text())
      .then(data => {
        document.getElementById("footer-placeholder").innerHTML = data;
      });
  }
  
// Appel de la fonction pour charger le header et le footer
includeHTML();
  

