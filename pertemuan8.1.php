<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hitung Jumlah Kata</title>
</head>

<body>
    <!-- <h1>Hitung Jumlah Kata</h1> -->
    <form method="post">
        <label for="kalimat">Masukkan kalimat:</label>
        <input type="text" id="kalimat" name="kalimat" required><br>
        <button type="submit">Hitung Kata</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kalimat = $_POST['kalimat'];
        $kataArray = explode(" ", $kalimat);
        $jumlahKata = count($kataArray);

        echo "Jumlah kata dalam kalimat: \"$kalimat\" adalah $jumlahKata.";
    }
    ?>
</body>

</html>