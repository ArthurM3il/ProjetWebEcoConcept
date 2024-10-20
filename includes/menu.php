<?php
session_start();
?>
<nav>
    <a href="index.php">Accueil</a>
    <a href="description.php">Descriptions</a>
    <a href="contact.php">Contact</a>
    <?php if(isset($_SESSION['admin'])): ?>
        <a href="admin/logout.php">Déconnexion</a>
    <?php endif; ?>
    <a href="admin/">Administration</a>
</nav>