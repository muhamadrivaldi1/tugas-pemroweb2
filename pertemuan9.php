<?php
$host = 'localhost';
$dbname = 'db_penjualan';
$username = 'root';  // Sesuaikan dengan username MySQL Anda
$password = '';  // Sesuaikan dengan password MySQL Anda

try {
    $conn = new PDO("mysql:host=$host;db_penjualan=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";  
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
