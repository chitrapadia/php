<?php
$arr = array(45, 12, 78, 23, 10);

sort($arr);

echo "Sorted Array:<br>";

foreach($arr as $value)
{
    echo $value . " ";
}
?>