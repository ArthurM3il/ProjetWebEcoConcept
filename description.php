<?php
require 'includes/bdd.php';
require 'includes/header.php';
require 'includes/menu.php';
?>

<h2>Descriptions</h2>

<div id="descriptions">
    <?php
    $descriptions = getDescriptions($bdd);

    foreach ($descriptions as $description): ?>
        <div class="description">
            <img src="<?= $description['image'] ?>" alt="<?= $description['texte'] ?>">
            <p><?= $description['texte'] ?></p>
        </div>
    <?php endforeach; ?>
</div>


<?php
require 'includes/footer.php';
?>