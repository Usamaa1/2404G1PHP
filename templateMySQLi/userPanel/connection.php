<?php

define("DB_HOST", "localhost");
define("DB_NAME", "biolife");
define("DB_USER", "root");
define("DB_PASS", "");

$connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check the connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

?>
