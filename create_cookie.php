<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter Name:
    <input type="text" name="username">
    <br><br>
    <input type="submit" name="submit" value="Create Cookie">
</form>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['username'];

    
    setcookie("username", $name, time()+3600);

    echo "<br>Cookie Created Successfully.";
}
?>

</body>
</html>