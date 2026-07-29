<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Simple login (Example)
if($username == "admin" && $password == "1234")
{
    $_SESSION['username'] = $username;
    header("Location: home.php");
}
else
{
    echo "Invalid Username or Password";
}
?>