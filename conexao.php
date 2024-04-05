<?php
$servername = "localhost";
$database = "bd_tcc";
$username = "host";
$password = "";
$sql = mysqli_connect($servername, $username, $password, $database);
if (!$sql) {
if (!$sql) {
die("Connection failed: " . mysqli_connect_error());
}
}
echo "Connected successfully";
mysqli_close($conn);
?>
