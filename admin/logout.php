<?php
session_start();
require '../includes/bdd.php';
session_destroy();
header('Location: ../index.php');
exit();