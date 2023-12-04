<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $query = "DELETE FROM data_mahasiswa WHERE id=$id";
    $result = $connect->query($query);
    if ($result) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error deleting record: " . $connect->error;
    }
}
?>