<?php
// koneksi ke db
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "wad_modul3_faizal";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    echo "<script>";
    echo "alert('Failed to connect into database')";
    echo "</script>";
}
?>