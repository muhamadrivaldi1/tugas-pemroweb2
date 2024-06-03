<!DOCTYPE html>
<html>

<head>
    <title>Hitung Nilai Akhir</title>
</head>

<body>
    <h2>Form Input Nilai Mahasiswa</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama" required><br>
        NIM: <input type="text" name="nim" required><br>
        Mata Kuliah: <input type="text" name="matakuliah" required><br>
        Jumlah Kehadiran (maks 18): <input type="number" name="kehadiran" max="18" required><br>
        Nilai Tugas: <input type="number" name="tugas" required><br>
        Nilai UTS: <input type="number" name="uts" required><br>
        Nilai UAS: <input type="number" name="uas" required><br>
        <input type="submit" name="submit" value="Hitung Nilai">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $matakuliah = $_POST['matakuliah'];
        $kehadiran = $_POST['kehadiran'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];

        // Bobot untuk setiap komponen nilai
        $bobot_kehadiran = 0.1;
        $bobot_tugas = 0.2;
        $bobot_uts = 0.3;
        $bobot_uas = 0.4;

        // Menghitung nilai akhir
        $nilai_kehadiran = ($kehadiran / 18) * 100;
        $nilai_akhir = ($nilai_kehadiran * $bobot_kehadiran) + ($tugas * $bobot_tugas) + ($uts * $bobot_uts) + ($uas * $bobot_uas);

        // Menentukan grade dengan switch case
        switch (true) {
            case ($nilai_akhir >= 80):
                $grade = 'A';
                break;
            case ($nilai_akhir >= 70):
                $grade = 'B';
                break;
            case ($nilai_akhir >= 60):
                $grade = 'C';
                break;
            case ($nilai_akhir >= 50):
                $grade = 'D';
                break;
            default:
                $grade = 'E';
                break;
        }

        // Menentukan keterangan lulus atau tidak
        $keterangan = ($nilai_akhir > 65) ? "Lulus" : "Tidak Lulus";

        // Menampilkan hasil
        echo "<h3>Hasil Penilaian</h3>";
        echo "Nama: $nama<br>";
        echo "NIM: $nim<br>";
        echo "Mata Kuliah: $matakuliah<br>";
        echo "Jumlah Kehadiran: $kehadiran<br>";
        echo "Nilai Tugas: $tugas<br>";
        echo "Nilai UTS: $uts<br>";
        echo "Nilai UAS: $uas<br>";
        echo "Nilai Akhir: " . number_format($nilai_akhir, 2) . "<br>";
        echo "Grade: $grade<br>";
        echo "Keterangan: $keterangan<br>";
    }
    ?>
</body>

</html>