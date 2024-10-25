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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/polices.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mediaQueries.css">
</head>
<header><?php require_once 'includes/menu.php'; ?></header>
<body>
    <div class="contact">
        <h2>Contact</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2845.943665936175!2d2.138799511997756!3d44.49582109740607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ad0d2bbf682bd3%3A0xf4b7229c520e0417!2s5%20Rue%20du%20Four%20%C3%A0%20Pain%2C%2012220%20Peyrusse-le-Roc!5e0!3m2!1sfr!2sfr!4v1729580068151!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p>Pour me contacter : <a href="mailto:<?php echo $contact->Email ?>">Envoyer un Email </a> <br> Par téléphone : <?php echo $contact->Phone ?> <br>
        Ou retrouvez moi sur <a href="<?php echo $contact->Facebook?>">Facebook </a></p>
    </div>
</body>

<?php
?>