<?php
$emails = ["john@example.com", "wrong-email@", "me@site", "user123@gmail.com"];
$validEmails = [];

foreach ($emails as $email) {
    if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        echo "$email <br>";
    }
}

?>

