<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $asal = $_POST['asal'];

    $query = "INSERT INTO data_mahasiswa (nama, nim, prodi, asal) VALUES ('$nama', '$nim', '$prodi', '$asal')";
    $result = $connect->query($query);

    if ($result) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $query . "<br>" . $connect->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<h2>Tambah Mahasiswa</h2>
<form method="post" action="">
    <label>Nama:</label>
    <input type="text" name="nama" required><br>
    <label>NIM:</label>
    <input type="text" name="nim" required><br>
    <label>Prodi:</label>
    <input type="text" name="prodi" required><br>
    <label>Asal:</label>
    <input type="text" name="asal" required><br>
    <button type="submit">Simpan</button>
</form>

</body>
</html>