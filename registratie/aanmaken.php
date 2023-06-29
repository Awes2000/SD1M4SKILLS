<?php
session_start();

// Read the errors and user input from the session
$errors = $_SESSION['errors'] ?? [];
$input = $_SESSION['input'] ?? '';

// Display the data using var_dump
var_dump($errors, $input);
?>