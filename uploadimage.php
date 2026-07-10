<?php

if(isset($_POST['upload']))
{
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];

    $folder = "uploads/" . $filename;

    if(move_uploaded_file($tempname, $folder))
    {
        echo "Image Uploaded Successfully.";
    }
    else
    {
        echo "Image Upload Failed.";
    }
}

?>