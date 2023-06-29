<?php
declare(strict_types=1);
session_start();
include_once "connectPDO.php";

echo 'Gegevens aanmaken' . '</br>';
var_dump($_SESSION['user']);

$naam = $_SESSION['user']['naam'];
$email = $_SESSION['user']['email'];
$tel = $_SESSION['user']['tel'];


$conn = db_connect();
$insertQuery = "INSERT INTO gegevens (naam, email, tel) VALUES ('$naam',  '$email', '$tel')";
$conn->exec($insertQuery);