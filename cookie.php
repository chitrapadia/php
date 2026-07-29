<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<form method="post">
    Enter Name:
    <input type="text" name="username">
    <br><br>

    Enter password:
    <input type="password" name="password">
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    setcookie("username", $username, time() + 86400);
    setcookie("password", $password, time() + 86400);

    echo "Cookie Created Successfully";
}
?>

</body>
</html>

<?php 

    session_start();

    if($_SERVER['REQUEST_METHOD']=="POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];


    $_SESSION['name']=$username;
    header('location: homepage.php');

    }