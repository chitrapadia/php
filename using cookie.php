<?php

$username="";
$password="";

if(isset($_COOKIE["username"]))
{
    $username=$_COOKIE["username"];
}

if(isset($_COOKIE["password"]))
{
    $password=$_COOKIE["password"];
}

if(isset($_POST['login']))
{
    setcookie("username",$_POST['username'],time()+3600);
    setcookie("password",$_POST['password'],time()+3600);

    echo "Login Successful";
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post">

Username:
<input type="text" name="username" value="<?php echo $username; ?>">
<br><br>

Password:
<input type="password" name="password" value="<?php echo $password; ?>">
<br><br>

<input type="submit" name="login" value="Login">

</form>

</body>
</html>