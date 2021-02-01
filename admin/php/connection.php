<?php
$server = "localhost";
$user = "root";
$password = "";

//connect to the server
$con = mysqli_connect($server,$user,$password);

$database = "admin_panel";

// select database
mysqli_select_db($con, $database);




?>