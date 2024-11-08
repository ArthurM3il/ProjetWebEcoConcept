const formContact = document.getElementById('Contact');

formContact.addEventListener('submit', (event) => {
    event.preventDefault();

    const formData = new FormData(formContact);

    fetch('../includes/contactManager.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      console.log('Réponse du serveur:', data);
      alert(data);
      formContact.reset();
    })
    .catch(error => {
      console.error('Erreur:', error);
    });
});