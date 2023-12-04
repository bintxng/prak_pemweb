<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'prak-8';

$connect = new mysqli($host, $user, $password, $database);

if ($connect->connect_error) {
    die("Koneksi gagal: " . $connect->connect_error);
}
?>