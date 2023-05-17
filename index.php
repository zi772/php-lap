<!--
php lap (array,loop,if statement,variables)
-->
<!DOCTYPE html>
<html>
<head>
<title>Student Grades</title>
</head>
<body>
<?php
$grades = array(
"ali" => 85,
"musaab" => 95,
"abdualziz" => 90,
"ahmed" => 76,
"khalid" => 92,
"fahad" => 79,
"abduallh" => 73
);
echo "<h1>Student Grades</h1>";
echo "<table>";
echo "<tr><th>Name</th><th>Grade</th><th>Status</th></tr>";
foreach ($grades as $name => $grade) {
echo "<tr><td>$name</td><td>$grade</td><td>";
if ($grade >= 95) {
echo "excellent";
} else if ($grade >= 85) {
echo "very good";
} else if ($grade >= 75) {
echo "good";
}
else if ($grade >= 65) {
echo "pass";
} else {
echo "Below Average";
}
echo "</td></tr>";
}
echo "</table>";
?>
</body>
</html>