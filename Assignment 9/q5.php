<?php

echo "Current Date and Time: " . date('d-m-Y H:i:s') . "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob = $_POST['dob'];
    $currentDate = new DateTime();
    $birthDate = new DateTime($dob);
    
    $nextBirthday = new DateTime($currentDate->format('Y') . '-' . $birthDate->format('m-d'));
    
    if ($nextBirthday < $currentDate) {
        $nextBirthday->modify('+1 year');
    }
    
    $interval = $currentDate->diff($nextBirthday);
    echo "Days left until your next birthday: " . $interval->days;
} else {
    echo '<form method="post">
            <label for="dob">Enter your Date of Birth (YYYY-MM-DD):</label><br>
            <input type="date" id="dob" name="dob" required><br>
            <input type="submit" value="Calculate">
          </form>';
}
?>


