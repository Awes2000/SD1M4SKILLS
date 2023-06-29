<?php
declare(strict_types=1);
session_start();
require_once "valideer.php";

$errors = [];
$inputs = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //email check
    if (isValidEmail($_POST['email']) == true) {
        $inputs['email'] = $_POST['email'];
    } else {
        array_push($errors, 'Geen geldig email adres');
    }

    //string check
    if (isNotValidString($_POST['naam']) == true) {
        array_push($errors, 'Naam is verplicht');
    } else {
        $inputs['naam'] = $_POST['naam'];
    }

    //nummer check
    if (isNumber($_POST['tel']) == false) {
        array_push($errors, 'Geen geldig telefoon nummer');
    } else {
        $inputs['tel'] = $_POST['tel'];
    }

}

if (count($errors) > 0) {
    $_SESSION['error'] = $errors;
    header('Location: bestel.php');
    exit();
} else {
    $_SESSION['user'] = $inputs;
    header('Location: aanmaken.php');
    exit();
}