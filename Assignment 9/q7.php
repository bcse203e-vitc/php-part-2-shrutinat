<?php

function calculateAverage($numbers) {
    if (empty($numbers)) {
        throw new Exception("No numbers provided");
    }
    $sum = array_sum($numbers);
    $count = count($numbers);
    return $sum / $count;
}

try {
    $numbers = [10, 20, 30, 40, 50]; 
    
    $average = calculateAverage($numbers);
    echo "The average of the numbers is: " . $average;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>

