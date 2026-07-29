<?php

include("database.php");

$msg = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password == $cpassword) {

        $sql = "UPDATE login SET password='$password' WHERE id=3";

        if (mysqli_query($conn, $sql)) {
            $msg = "Password Updated Successfully";
        } else {
            $msg = "Error: " . mysqli_error($conn);
        }

    } else {

        $msg = "Password does not match";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Password</title>
</head>

<body>

<h2>Update Password</h2>

<form method="POST">

    New Password:
    <input type="password" name="password" required>

    <br><br>

    Confirm Password:
    <input type="password" name="cpassword" required>

    <br><br>

    <input type="submit" value="Update">

</form>

<br>

<?php echo $msg; ?>

<br><br>

<a href="login.php">
    <button type="button">Back to Login</button>
</a>

</body>
</html>