<!DOCTYPE html>
<html>
<head>
    <title>Type Casting</title>
</head>
<body>

<form action="typecast.php" method="post">
    Enter Value:
    <input type="text" name="value" required><br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $value = $_POST['value'];

    echo "Original Value: ".$value."<br>";
    echo "Original Type: ".gettype($value)."<br><br>";

    settype($value, "integer");

    echo "After Type Casting:<br>";
    echo "Value: ".$value."<br>";
    echo "New Type: ".gettype($value);
}

?>