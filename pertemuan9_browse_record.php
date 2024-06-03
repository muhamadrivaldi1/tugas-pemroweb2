<?php
include 'pertemuan9.php';

$sql = "SELECT * FROM barang";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Barang</title>
</head>

<body>
    <h1>Daftar Barang</h1>
    <table border="1">
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Stok</th>
        </tr>
        <?php foreach ($results as $row) : ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id_barang']); ?></td>
                <td><?php echo htmlspecialchars($row['nama_barang']); ?></td>
                <td><?php echo htmlspecialchars($row['harga_barang']); ?></td>
                <td><?php echo htmlspecialchars($row['stok']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>