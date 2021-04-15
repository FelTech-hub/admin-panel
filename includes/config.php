<?php 

// Database Config
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "felix4christ");
define("DB_NAME", "form");
// DB Connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("DB Failed");

?>