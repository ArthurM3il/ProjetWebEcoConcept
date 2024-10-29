const formPres = document.getElementById('Presentation');

formPres.addEventListener('submit', (event) => {
    event.preventDefault();

    const formData = new FormData(formPres);
console.log(formData);
console.log(formPres);

    fetch('../includes/presentationManager.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      console.log('Réponse du serveur:', data);
      alert(data);
    })
    .catch(error => {
      console.error('Erreur:', error);
    });
});