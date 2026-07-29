<?php

$cookie_name = "visitor";

if(isset($_COOKIE[$cookie_name]))
{
    echo "Welcome Back! You are a repeated user.";
}
else
{
    setcookie($cookie_name, "visited", time()+86400*30); //30 days
    echo "Welcome! You are a new user.";
}

?>