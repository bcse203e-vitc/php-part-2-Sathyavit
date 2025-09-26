<?php
$students = [
    "artu" => 85,
    "kasu" => 92,
    "Arun"  => 78,
    "sathya" => 95,
    "Kiran" => 88,
    "Sanjay"=> 80
];

arsort($students);
$topStudents = array_slice($students, 0, 3, true);

echo "<h3>Top 3 Students</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Rank</th><th>Name</th><th>Marks</th></tr>";

$rank = 1;
foreach ($topStudents as $name => $marks) {
    echo "<tr>";
    echo "<td>$rank</td>";
    echo "<td>$name</td>";
    echo "<td>$marks</td>";
    echo "</tr>";
    $rank++;
}

echo "</table>";
?>

