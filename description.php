<!DOCTYPE html>
<html lang="fr">
<head>
<?php
    require 'includes/bdd.php';
    session_start();
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La terre des anges - Descriptions</title>
    <link rel="stylesheet" href="css/style-minified.css" type="text/css" media="print">
    <link rel="stylesheet" href="css/style-minified.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mediaQueries-minified.css">
</head>
<header><?php
require_once 'includes/menu.php';
require_once 'includes/function.php';
$descriptions = getDescriptions($bdd);
?>
</header>
<body>
    <div class="container">
<h2>Descriptions</h2>

<div id="descriptions">
    <?php
    foreach ($descriptions as $description): ?>
        <div class="description">
        <div class="description-content">
        <h3><?php echo $description["titre"] ?></h3>
         <p><?php echo $description["description"] ?></p>
         <p><?php echo $description["prix"]?>€</p>
        </div>
            <img src="assets/imgs/<?php echo $description["image"] ?>" alt="<?php echo $description["alt"] ?>">
        </div>
    <?php endforeach; ?>
</div>
</div>
</body>

<footer>
<?php
require 'includes/footer.php';
?>
</footer>