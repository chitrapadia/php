<?php
session_start();

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if($username=="admin" && $password=="1234")
    {
        $_SESSION['username']=$username;
        header("Location: home.php");
    }
    else
    {
        echo "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<form method="post">
Username:
<input type="text" name="username"><br><br>

Password:
<input type="password" name="password"><br><br>

<input type="submit" name="login" value="Login">
</form>
</body>
</html>