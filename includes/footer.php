<?php
  require_once "function.php";
  $contact = getContact($bdd); 
  //$presentation = getPresentation($bdd);
  ?>
<p><a href="mailto:<?php echo $contact->Email ?>">Envoyer un Email </a></p>
<p><a href="<?php echo $contact->Facebook?>">Facebook </a></p>
<p>Téléphone : <?php echo $contact->Phone ?></p>