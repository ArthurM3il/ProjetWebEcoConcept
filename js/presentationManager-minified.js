const formPres=document.getElementById("Presentation");formPres.addEventListener("submit",e=>{e.preventDefault();let r=new FormData(formPres);console.log(r),console.log(formPres),fetch("../includes/presentationManager.php",{method:"POST",body:r}).then(e=>e.text()).then(e=>{console.log("R\xe9ponse du serveur:",e),alert(e),formPres.reset()}).catch(e=>{console.error("Erreur:",e)})});