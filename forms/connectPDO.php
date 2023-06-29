<?php
declare(strict_types=1);
require_once "connect.php";

function db_connect(): object
{
    global $servername;
    global $username;
    global $password;
    global $dbname;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die ("Fout bij het maken van de connection: " . $e->getMessage());
    }
    return $conn;
}

