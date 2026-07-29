<?php
session_start();

$_SESSION["username"] = "Aarchi";

echo "Session Created.<br>";
echo "Username: " . $_SESSION["username"];
?>