<!DOCTYPE html>
<html>
<head>
    <title>AJAX Load Text File</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<h2>Load Text File using AJAX</h2>

<button id="load">Load Text File</button>

<div id="content" style="margin-top:20px;border:1px solid black;padding:10px;">
    Content will appear here...
</div>

<script>
$(document).ready(function(){

    $("#load").click(function(){

        $("#content").load("demo.txt");

    });

});
</script>

</body>
</html>


