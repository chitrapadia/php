<!DOCTYPE html>
<html>
<head>
    <title>Smooth Scroll to Top</title>

    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            line-height: 1.8;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .content {
            padding: 30px;
            min-height: 1200px;
        }

        .box {
            background-color: #f2f2f2;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }

        #topButton {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 15px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        #topButton:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>My Website</h1>
        <p>jQuery Smooth Scroll Example</p>
    </div>

    <div class="content">

        <div class="box">
            <h2>Section 1</h2>
            <p>
                This is the first section of the webpage.
                Scroll down to see the "Go to Top" button.
            </p>
        </div>

        <div class="box">
            <h2>Section 2</h2>
            <p>
                jQuery is a JavaScript library used to make
                webpage operations simple and interactive.
            </p>
        </div>

        <div class="box">
            <h2>Section 3</h2>
            <p>
                AJAX, animations, events and effects can be
                easily implemented using jQuery.
            </p>
        </div>

        <div class="box">
            <h2>Section 4</h2>
            <p>
                Continue scrolling down the page to test
                the smooth scrolling feature.
            </p>
        </div>

        <div class="box">
            <h2>Section 5</h2>
            <p>
                Click the button at the bottom-right corner
                to smoothly scroll back to the top.
            </p>
        </div>

    </div>

    <!-- Go To Top Button -->
    <button id="topButton">↑ Go to Top</button>


    <script>

        $(document).ready(function() {

            $("#topButton").click(function() {

                $("html, body").animate({
                    scrollTop: 0
                }, 1000);

            });

        });

    </script>

</body>
</html>
