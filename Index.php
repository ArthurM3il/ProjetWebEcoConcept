<!DOCTYPE html>
<html lang="fr">
<head>
<?php
    require 'includes/bdd.php';
    session_start();
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La terre des anges</title>
    <link rel="stylesheet" href="css/style-minified.css" type="text/css" media="print">
    <link rel="stylesheet" href="css/style-minified.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mediaQueries-minified.css">
</head>

<body>

<header><?php
require_once 'includes/menu.php';
require_once 'includes/function.php';
$presentation = getPresentation($bdd);
?></header>

<div class="container">
<h2>Accueil</h2>

<div id="carousel-container">
    <div id="carousel">
    </div>
    <div class="carousel-controls">
        <button id="prev-button">❮</button>
        <button id="next-button">❯</button>
    </div>
</div>

<div id="presentation">
    <p><?php echo $presentation->texte ?></p>
</div>
</div>

<footer>
<?php
require 'includes/footer.php';
?>
</footer>

<script src="js/viewer-minified.js"></script>
</body>

</html>