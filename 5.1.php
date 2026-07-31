<!DOCTYPE html>
<html>
<head>
    <title>jQuery Mouse and Keyboard Events</title>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<h2>jQuery Mouse and Keyboard Events</h2>

<button id="btn">Click Me</button>
<br><br>

<input type="text" id="txt" placeholder="Type something">

<p id="result"></p>

<script>
$(document).ready(function(){

    // Mouse Events
    $("#btn").click(function(){
        $("#result").text("Button Clicked!");
    });

    $("#btn").mouseenter(function(){
        $("#result").text("Mouse Entered Button");
    });

    $("#btn").mouseleave(function(){
        $("#result").text("Mouse Left Button");
    });

    // Keyboard Events
    $("#txt").keypress(function(){
        $("#result").text("Key Pressed");
    });

    $("#txt").keyup(function(){
        $("#result").text("You Typed: " + $("#txt").val());
    });

});
</script>

</body>
</html>
