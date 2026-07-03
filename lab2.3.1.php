<?php
$arr = array("Apple", "Banana", "Apple", "Mango", "Banana", "Apple");

$result = array_count_values($arr);

echo "<pre>";
print_r($result);
echo "</pre>";
?>