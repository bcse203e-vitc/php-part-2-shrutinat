<?php
$students = [
    "Rahul" => 85,
    "Priya" => 92,
    "Arun" => 78,
    "Sita" => 88,
    "Ravi" => 95,
    "Anita" => 90
];

arsort($students);
$top_students = array_slice($students, 0, 3, true);

echo "<table border='1'>";
echo "<tr><th>Name</th><th>Marks</th></tr>";
foreach ($top_students as $name => $marks) {
    echo "<tr><td>$name</td><td>$marks</td></tr>";
}
echo "</table>";
?>

