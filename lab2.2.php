<!DOCTYPE html>
<html>
<head>
    <title>Sort Array</title>
</head>
<body>

<form method="post">
    Enter numbers (comma separated):
    <input type="text" name="numbers">
    <input type="submit" value="Sort">
</form>

<?php
if(isset($_POST['numbers']))
{
    $arr = explode(",", $_POST['numbers']);
    sort($arr);

    echo "<h3>Sorted Array:</h3>";
    foreach($arr as $value)
    {
        echo $value . " ";
    }
}
?>

</body>
</html>