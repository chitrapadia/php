<?php
// AJAX request ke liye response headers set karna
if (isset($_GET['ajax'])) {

    header("Content-Type: text/plain");
    header("Content-Length: 25");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("ETag: \"123456789\"");

    echo "Header information";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Retrieve HTTP Header Information</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f2f2f2;
        }

        .container {
            background-color: white;
            padding: 25px;
            max-width: 700px;
            margin: auto;
            box-shadow: 0 0 10px #aaa;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }

        #result {
            margin-top: 20px;
            padding: 20px;
            background-color: #eee;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Retrieve Header Information</h2>

    <p>Click the button to retrieve the resource headers.</p>

    <button onclick="getHeaders()">Get Header Information</button>

    <div id="result">
        Header information will appear here.
    </div>

</div>


<script>

function getHeaders() {

    // XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Request current PHP file
    xhr.open("GET", "<?php echo $_SERVER['PHP_SELF']; ?>?ajax=1", true);

    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

            // Retrieve individual response headers
            var contentType = xhr.getResponseHeader("Content-Type");
            var contentLength = xhr.getResponseHeader("Content-Length");
            var lastModified = xhr.getResponseHeader("Last-Modified");
            var etag = xhr.getResponseHeader("ETag");

            // Display headers
            document.getElementById("result").innerHTML =
                "<h3>Response Headers</h3>" +
                "<b>Content-Type:</b> " + contentType + "<br><br>" +
                "<b>Content-Length:</b> " + contentLength + "<br><br>" +
                "<b>Last-Modified:</b> " + lastModified + "<br><br>" +
                "<b>ETag:</b> " + etag;
        }
    };

    // Send request
    xhr.send();
}

</script>

</body>
</html>
