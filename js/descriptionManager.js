const form = document.getElementById('Description');

  form.addEventListener('submit', (event) => {
    event.preventDefault();

    const formData = new FormData(form);

    const fichierInput = document.getElementById('image');
    if (fichierInput.files.length > 0) {
      const image = fichierInput.files[0].name;
      formData.append('image', image);

    fetch('../includes/descriptionManager.php', {
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
}
  });