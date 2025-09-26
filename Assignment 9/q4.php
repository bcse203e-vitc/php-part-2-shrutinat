<?php

class InvalidPasswordException extends Exception {}

function validatePassword(string $password): void {
    if (strlen($password) < 8) {
        throw new InvalidPasswordException("Password must be at least 8 characters long.");
    }

    if (!preg_match('/[A-Z]/', $password)) {
        throw new InvalidPasswordException("Password must contain at least one uppercase letter.");
    }

    if (!preg_match('/\d/', $password)) {
        throw new InvalidPasswordException("Password must contain at least one digit.");
    }

    if (!preg_match('~[^A-Za-z0-9\s]~', $password)) {
        throw new InvalidPasswordException("Password must contain at least one special character (e.g., @, #, $, %).");
    }
}

$password = $argv[1] ?? "TestP@ss1";

echo "Testing Password: \"$password\" <br>";

try {
    validatePassword($password);
    
    echo "Result: Password validated successfully <br>";

} catch (InvalidPasswordException $e) {
    echo "Result: Validation Failed \n";
    echo "Error: " . $e->getMessage() . "\n";

} catch (Exception $e) {
    echo "Result: Unexpected Error \n";
    echo "Error: " . $e->getMessage() . "\n";
}
