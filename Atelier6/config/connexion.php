<?php
$dsn = "mysql:host=localhost;dbname=atelier6_dsi3_G2";
$username = "root";
$password = "";
try {
    $connexion = new PDO($dsn, $username, $password);
} catch (Exception $e) {
    echo "Erreur de connexion :" . $e->getMessage();
    die;
}
