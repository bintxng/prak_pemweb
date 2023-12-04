<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $query = "SELECT * FROM data_mahasiswa WHERE id=$id";
    $result = $connect->query($query);
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $asal = $_POST['asal'];


    $query = "UPDATE data_mahasiswa SET nama='$nama', nim='$nim', prodi='$prodi', asal='$asal' WHERE id=$id";
    $result = $connect->query($query);
      
    if ($result) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error updating record: " . $connect->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<h2>Edit Mahasiswa</h2>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>Nama:</label>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
    <label>NIM:</label>
    <input type="text" name="nim" value="<?php echo $row['nim']; ?>" required><br>
    <label>Prodi:</label>
    <input type="text" name="prodi" value="<?php echo $row['prodi']; ?>" required><br>
    <label>Asal:</label>
    <input type="text" name="asal" value="<?php echo $row['asal']; ?>" required><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>