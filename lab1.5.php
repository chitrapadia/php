<?php
echo "<h3>Using For Loop</h3>";
for($i = 5; $i <= 10; $i++)
{
    echo $i . " ";
}

echo "<h3>Using Foreach Loop</h3>";
$arr = range(5, 10);

foreach($arr as $value)
{
    echo $value . " ";
}
?>