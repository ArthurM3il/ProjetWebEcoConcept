<?php
try {
    $bdd = new PDO('mysql:host=mysql-arthurm.alwaysdata.net;dbname=arthurm_terredesanges', 'arthurm','LaTerreDesAnges');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    die();
}