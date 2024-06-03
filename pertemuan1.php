<?php
if ($_POST) {
    $nama = $_POST["name1"];
    $alamat = $_POST["address"];
    $umur = $_POST["age"];
    $telepon = $_POST["phone"];

    echo "<h1>Biodata</h1>";
    echo "Nama: " . $nama . "<br>";
    echo "Alamat: " . $alamat . "<br>";
    echo "Umur: " . $umur . " <br>";
    echo "Telepon: " . $telepon . "<br>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Biodata</title>
</head>

<body>
    <form action="" method="POST">
        <h1>Form Biodata</h1>
        Nama: <input type="text" name="name1"><br><br>
        Alamat: <textarea name="address"></textarea><br><br>
        Umur: <input type="text" name="age"><br><br>
        Telepon: <input type="text" name="phone"><br><br>
        <input type="submit" value="Tampilkan Biodata">
    </form>
</body>

</html>