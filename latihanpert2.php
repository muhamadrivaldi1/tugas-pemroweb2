<?php
// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];

    // Perhitungan nilai rata-rata
    $nilai_rata_rata = ($nilai_tugas + $nilai_uts + $nilai_uas) / 3;

    // Menampilkan hasil perhitungan
    echo "<h2>Hasil Perhitungan Nilai</h2>";
    echo "Nama: $nama<br>";
    echo "Jurusan: $jurusan<br>";
    echo "Nilai Tugas: $nilai_tugas<br>";
    echo "Nilai UTS: $nilai_uts<br>";
    echo "Nilai UAS: $nilai_uas<br>";
    echo "Nilai Rata-rata: $nilai_rata_rata<br>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Input Data</title>
</head>

<body>

    <h2>Masukkan Data Mahasiswa</h2>

    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" required><br><br>

        <label for="nilai_tugas">Nilai Tugas:</label>
        <input type="number" id="nilai_tugas" name="nilai_tugas" min="0" max="100" required><br><br>

        <label for="nilai_uts">Nilai UTS:</label>
        <input type="number" id="nilai_uts" name="nilai_uts" min="0" max="100" required><br><br>

        <label for="nilai_uas">Nilai UAS:</label>
        <input type="number" id="nilai_uas" name="nilai_uas" min="0" max="100" required><br><br>

        <input type="submit" value="Hitung">
    </form>

</body>

</html>