<!-- M. Bintang Erlangga H -->
<!--      121140171        -->


<?php
include 'connect.php';

$query = "SELECT * FROM data_mahasiswa";
$result = $connect->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<h2>Data Mahasiswa</h2>
<a href="create.php">Tambah Mahasiswa</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Asal</th>
        <th>Detail</th>
    </tr>

    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['nim']}</td>
                <td>{$row['prodi']}</td>
                <td>{$row['asal']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a>
                    <a href='hapus.php?id={$row['id']}'>Hapus</a>
                </td>
              </tr>";
    }
    ?>
</table>

</body>
</html>