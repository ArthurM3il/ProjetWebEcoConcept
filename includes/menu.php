<h1>La Terre des Anges</h1>
<nav>
    <a href="index.php">Accueil</a>
    <a href="description.php">Descriptions</a>
    <a href="contact.php">Contact</a>
    <?php if(isset($_SESSION['admin'])): ?>
        <a href="admin/logout.php">Déconnexion</a>
    <?php endif; ?>
    <a href="admin/connexion.php">Administration</a>
</nav>