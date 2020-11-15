<?php
// Connect to database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Modul3";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    echo "<script>";
    echo "alert('Failed Connect into Database')";
    echo "</script>";
}
?>