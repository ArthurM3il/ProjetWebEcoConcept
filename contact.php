<?php
require 'includes/bdd.php';
require_once 'includes/function.php';
$contact = getContact($bdd)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La terre des anges - Contact</title>
    <link rel="stylesheet" href="css/style-minified.css" type="text/css" media="print">
    <link rel="stylesheet" href="css/style-minified.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mediaQueries.css">
</head>
<header><?php require_once 'includes/menu.php'; ?></header>
<body>
<div class="container">
        <h2>Contact</h2>
        <iframe width="425" height="350" src="https://www.openstreetmap.org/export/embed.html?bbox=2.1399924159049992%2C44.494798730429316%2C2.1428596973419194%2C44.496356101189576&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=19/44.495577/2.141426">Afficher une carte plus grande</a></small>
        <p>Pour me contacter : <a class="contact" href="mailto:<?php echo $contact->Email ?>">Envoyer un Email </a> <br> Par téléphone : <?php echo $contact->Phone ?> <br>
        Ou retrouvez moi sur <a class="contact" href="<?php echo $contact->Facebook?>">Facebook </a></p>
</div>
<script src="js/burger.js"></script>
</body>

<?php
?>