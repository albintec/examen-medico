<?php 

$server = "b0psqpxq3nmo609xpejp-mysql.services.clever-cloud.com";
$user = "uatcpozn0huek6ls";
$pass = "5z75DwjrLfZKI6d9Sz92";
$database = "b0psqpxq3nmo609xpejp";



$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>