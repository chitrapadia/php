<?php
include("database.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {

        $sql = "UPDATE user SET password='$password' WHERE id=3";
        mysqli_query($conn, $sql);
    }
}

?>

<form method="POST">

    Password:
    <input type="password" name="password">

    <br><br>

    Confirm Password:
    <input type="password" name="cpassword">

    <br><br>

    <input type="submit" value="submit">

</form>

