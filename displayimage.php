<!DOCTYPE html>
<html>
<head>
    <title>PHP Image Slider</title>

    <style>
        body{
            font-family: Arial;
            text-align: center;
        }

        .slider{
            width: 600px;
            height: 350px;
            margin: 30px auto;
            overflow: hidden;
            border: 2px solid black;
        }

        .slider img{
            width: 600px;
            height: 350px;
            display: none;
        }

        .slider img.active{
            display: block;
        }
    </style>
</head>
<body>

<h2>Image Slider using PHP</h2>

<?php
$images = array(
    "images/img1.jpg",
    "images/img2.jpg",
    "images/img3.jpg",
    "images/img4.jpg"
);
?>

<div class="slider">
    <?php
    $first = true;
    foreach($images as $img)
    {
        if($first)
        {
            echo "<img src='$img' class='active'>";
            $first = false;
        }
        else
        {
            echo "<img src='$img'>";
        }
    }
    ?>
</div>

<script>
let slide = document.querySelectorAll(".slider img");
let index = 0;

setInterval(function(){

    slide[index].classList.remove("active");

    index++;

    if(index == slide.length)
    {
        index = 0;
    }

    slide[index].classList.add("active");

},2000);
</script>

</body>
</html>