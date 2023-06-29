<?php

function isValidEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isNotValidString(string $data): bool {
    return empty(trim($data));
}

function isNumber(string $number): bool {
    return is_numeric($number);
}

function CheckPostCode(string $postcode): bool {
    $first4 = substr($postcode, 0, 4);
    $last2 = substr($postcode, -2);
    if (!is_numeric($first4)) {
        return false;
    }
    if (!ctype_alpha($last2)) {
        return false;
    }
    return true;
}
