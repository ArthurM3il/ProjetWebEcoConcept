<?php
try {
    //$bdd = new PDO('mysql:host=mysql-arthurm.alwaysdata.net;dbname=arthurm_terredesanges', 'arthurm', 'Art!147258369');
    $bdd = new PDO('mysql:host=localhost;dbname=TerreDesAnges', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    die();
}
?>