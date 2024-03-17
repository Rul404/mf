<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "jamah";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    echo "koneksi databse eror";
    die("error!");
}

?>