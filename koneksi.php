<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "appm";

$koneksi = mysqli_connect($server, $user, $password, $database) or die (mysqli_eror($koneksi));
 