<?php
setcookie("username", "Aarchi", time()+3600);


header("Location: read_cookie.php");
exit();
?>