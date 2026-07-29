<?php
    $lost = "localhost";
    $user = "root";
    $pass = "";
    $database = "delete";

    $conn = mysqli_connect($lost,$user,$pass,$database,3307);

    if(!$conn){
        echo mysqli_connect_error();
    }

?>