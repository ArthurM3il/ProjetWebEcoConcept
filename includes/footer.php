<div class="footer">
<?php
  require_once "function.php";
  $contact = getContact($bdd); 
  ?>
<p><a href="mailto:<?php echo $contact->Email ?>">Envoyer un Email </a></p>
<p><a href="<?php echo $contact->Facebook?>">Facebook </a></p>
<p>Téléphone : <?php echo $contact->Phone ?></p>
<p><a href="admin/connexion.php">Administration</a></p>
</div>
</html>