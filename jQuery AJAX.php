<?php
// AJAX REQUEST HANDLE
if (isset($_POST['page'])) {

    $page = $_POST['page'];

    if ($page == "home") {
        echo "<h2>Home</h2>";
        echo "<p>Welcome to our website.</p>";
        echo "<p>This content is loaded dynamically using jQuery and AJAX.</p>";
    }

    elseif ($page == "about") {
        echo "<h2>About Us</h2>";
        echo "<p>We are a web development company.</p>";
        echo "<p>This is the About section of our website.</p>";
    }

    elseif ($page == "products") {
        echo "<h2>Our Products</h2>";

        echo "<div class='product'>";
        echo "<h3>Laptop</h3>";
        echo "<p>Price: ₹50,000</p>";
        echo "</div>";

        echo "<div class='product'>";
        echo "<h3>Mobile Phone</h3>";
        echo "<p>Price: ₹25,000</p>";
        echo "</div>";

        echo "<div class='product'>";
        echo "<h3>Headphones</h3>";
        echo "<p>Price: ₹2,000</p>";
        echo "</div>";
    }

    elseif ($page == "blog") {
        echo "<h2>Blog Posts</h2>";

        echo "<div class='blog'>";
        echo "<h3>What is AJAX?</h3>";
        echo "<p>AJAX is used to load data from the server without refreshing the complete webpage.</p>";
        echo "</div>";

        echo "<div class='blog'>";
        echo "<h3>What is jQuery?</h3>";
        echo "<p>jQuery is a JavaScript library that makes JavaScript and AJAX easier.</p>";
        echo "</div>";
    }

    else {
        echo "<h2>Invalid Page</h2>";
    }

    exit;
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>jQuery AJAX Navigation</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        nav {
            background-color: #222;
            text-align: center;
            padding: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            margin: 5px;
            display: inline-block;
            background-color: #444;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #007bff;
        }

        #content {
            width: 80%;
            margin: 30px auto;
            padding: 30px;
            background-color: white;
            min-height: 250px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px #aaa;
        }

        h2 {
            color: #007bff;
        }

        .product, .blog {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 15px 0;
            border-radius: 5px;
            background-color: #fafafa;
        }

        .loading {
            color: #007bff;
            font-weight: bold;
        }

    </style>

</head>

<body>

    <!-- Navigation Menu -->

    <nav>
        <a href="#" class="menu" data-page="home">Home</a>
        <a href="#" class="menu" data-page="about">About</a>
        <a href="#" class="menu" data-page="products">Products</a>
        <a href="#" class="menu" data-page="blog">Blog</a>
    </nav>


    <!-- Dynamic Content -->

    <div id="content">

        <h2>Welcome to My Website</h2>

        <p>
            Click on any menu item to load content using
            <b>jQuery and AJAX</b>.
        </p>

    </div>


    <!-- AJAX CODE -->

    <script>

        $(document).ready(function() {

            $(".menu").click(function(e) {

                e.preventDefault();

                var page = $(this).attr("data-page");

                $("#content").html(
                    "<p class='loading'>Loading...</p>"
                );

                $.ajax({

                    type: "POST",

                    url: window.location.href,

                    data: {
                        page: page
                    },

                    success: function(response) {

                        $("#content").html(response);

                    },

                    error: function(xhr, status, error) {

                        $("#content").html(
                            "<p style='color:red;'>Unable to load content.</p>"
                        );

                        console.log(error);

                    }

                });

            });

        });

    </script>

</body>
</html>