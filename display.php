<?php
session_start();


if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Username</title>
</head>
<body>

    <h2>Welcome</h2>

    <?php
    if (isset($_SESSION['username'])) {
        echo "Username: " . htmlspecialchars($_SESSION['username']);
    } else {
        echo "No username found in session.";
    }
    ?>

</body>
</html>