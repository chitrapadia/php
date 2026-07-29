<?php

    include 'database2.php';

    $sel="SELECT * FROM `sign_up`";
    $result=mysqli_query($conn,$sel);

    if($result -> num_rows  > 0){
        while($row = $result -> fetch_assoc())
            echo $row['ID']." ".$row['Name']."<br>";
    }
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>