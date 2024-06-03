<?php
include 'pertemuan9.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO barang (nama_barang, harga_barang, stok) VALUES (:nama_barang, :harga_barang, :stok)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nama_barang', $nama_barang);
    $stmt->bindParam(':harga_barang', $harga_barang);
    $stmt->bindParam(':stok', $stok);

    if ($stmt->execute()) {
        echo "Record added successfully.";
    } else {
        echo "Error adding record.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
</head>

<body>
    <h1>Tambah Barang</h1>
    <form method="post">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" required><br>
        <label for="harga_barang">Harga Barang:</label>
        <input type="number" step="0.01" id="harga_barang" name="harga_barang" required><br>
        <label for="stok">Stok:</label>
        <input type="number" id="stok" name="stok" required><br>
        <button type="submit">Tambah</button>
    </form>
</body>

</html>