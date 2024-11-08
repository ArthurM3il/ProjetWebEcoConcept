const form = document.getElementById('connexion');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const formData = new FormData(form);
console.log(formData);
console.log(form);

    fetch('../admin/login.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      console.log('Réponse du serveur:', data);
      console.log(data.success)
      if(data.success){
        window.location.href = "manager.php";
      }else{
      alert("erreur");
      form.reset();
      }
    })
    .catch(error => {
      console.error('Erreur:', error);
    });
});