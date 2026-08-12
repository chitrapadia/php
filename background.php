<!DOCTYPE html>
<html>
<head>
    <title>jQuery Selectors and Styles</title>

    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        body {
            font-family: Arial;
            margin: 30px;
        }

        p, h2, button {
            padding: 10px;
            margin: 10px;
        }

        button {
            cursor: pointer;
        }

        #output {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>

    <h1 id="heading">jQuery Selector Example</h1>

    <h2>Heading 1</h2>
    <h2>Heading 2</h2>

    <p>This is paragraph 1.</p>
    <p>This is paragraph 2.</p>
    <p>This is paragraph 3.</p>

    <button id="btn1">Make Paragraph Red</button>
    <button id="btn2">Make Heading Red</button>
    <button id="btn3">Make Button Red</button>
    <button id="btn4">Make All Red</button>

    <div id="output">
        <b>Experiment with different jQuery selectors and styles.</b>
    </div>

    <script>

        $(document).ready(function() {

            // Select all paragraphs
            $("#btn1").click(function() {
                $("p").css("background-color", "red");
                $("p").css("color", "white");
            });

            // Select all h2 headings
            $("#btn2").click(function() {
                $("h2").css("background-color", "red");
                $("h2").css("color", "white");
            });

            // Select all buttons
            $("#btn3").click(function() {
                $("button").css("background-color", "red");
                $("button").css("color", "white");
            });

            // Select multiple elements
            $("#btn4").click(function() {
                $("p, h2, button").css("background-color", "red");
                $("p, h2, button").css("color", "white");
            });

        });

    </script>

</body>
</html>
