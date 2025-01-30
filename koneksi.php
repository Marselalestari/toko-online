<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineshop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
