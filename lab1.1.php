<?php

define("COLLEGE_NAME", "ABC College");

$studentName = "chitra padia";
$semester = "Semester 3";
$marks = 450;
$totalMarks = 500;
$percentage = ($marks / $totalMarks) * 100;

echo "<h2>Previous Semester Result</h2>";
echo "College Name: " . COLLEGE_NAME . "<br>";
echo "Student Name: " . $studentName . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Marks Obtained: " . $marks . " / " . $totalMarks . "<br>";
echo "Percentage: " . $percentage . "%<br>";
?>
