<?php 
session_start();


unset($_SESSION["userId"]);
unset($_SESSION["userName"]);
unset($_SESSION["userEmail"]);

session_destroy();

echo "<script>location.href='login.php'</script>";
// header("login.php")


?>