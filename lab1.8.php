<?php
$input = "10,20,30,40,50";

$array = explode(",", $input);

echo "<h3>Original Array:</h3>";
print_r($array);


$reverseArray = array_reverse($array);

echo "<h3>Reversed Array:</h3>";
print_r($reverseArray);
?>