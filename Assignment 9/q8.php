<?php

function extractMobileNumbers($fileName) {
    if (!file_exists($fileName)) {
        echo "The file does not exist!";
        return;
    }
    $content = file_get_contents($fileName);
    $pattern = '/\b\d{10}\b/';

    preg_match_all($pattern, $content, $matches);

    return $matches[0];
}

function saveNumbersToFile($numbers, $outputFile) {
    $file = fopen($outputFile, 'w');

    if ($file) {
        foreach ($numbers as $number) {
            fwrite($file, $number . PHP_EOL);
        }
        fclose($file);
        echo "Mobile numbers saved to $outputFile.";
    } else {
        echo "Unable to open the file for writing.";
    }
}

$dataFile = 'data.txt';
$outputFile = 'numbers.txt';

$mobileNumbers = extractMobileNumbers($dataFile);

if (!empty($mobileNumbers)) {
    saveNumbersToFile($mobileNumbers, $outputFile);
} else {
    echo "No mobile numbers found in the file.";
}

?>

