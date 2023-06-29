<?php
session_start();

function checkNumerical($input) {
    if (is_numeric($input)) {
        return true;
    } else {
        return false;
    }
}

// Validate the input and save it in the session
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['input'];

    if (!checkNumerical($input)) {
        $_SESSION['errors'][] = "Invalid input. Only numerical values are allowed.";
    }
    $_SESSION['input'] = $input;
}
?>