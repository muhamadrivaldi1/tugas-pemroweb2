<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Selisih Hari Antara Dua Tanggal</title>
</head>

<body>
    <!-- <h1>Selisih Hari Antara Dua Tanggal</h1> -->
    <form method="post">
        <label for="tanggal1">Masukkan tanggal pertama  :</label>
        <input type="date" id="tanggal1" name="tanggal1" required><br><br>
        <label for="tanggal2">Masukkan tanggal kedua    :</label>
        <input type="date" id="tanggal2" name="tanggal2" required><br><br>
        <button type="submit">Hitung Selisih</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tanggal1 = $_POST['tanggal1'];
        $tanggal2 = $_POST['tanggal2'];

        $date1 = new DateTime($tanggal1);
        $date2 = new DateTime($tanggal2);
        $selisih = $date1->diff($date2);

        echo "Selisih antara $tanggal1 dan $tanggal2 adalah " . $selisih->days . " hari.";
    }
    ?>
</body>

</html>