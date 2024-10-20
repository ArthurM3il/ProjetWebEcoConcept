<?php
require 'includes/bdd.php';
require 'includes/header.php';
require 'includes/menu.php';
?>

<h2>Accueil</h2>

<div id="viewer">
    <!-- Contenu du viewer chargé via AJAX -->
</div>

<div id="presentation">
    <?php
    // Récupérer et afficher le texte de présentation depuis la BDD
    // ...
    ?>
</div>

<script src="js/viewer.js"></script>  <!-- Script pour le viewer AJAX -->

<?php
require 'includes/footer.php';
?>