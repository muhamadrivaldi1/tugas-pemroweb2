<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Materi Pemrograman PHP</title>
</head>

<body>
    <!-- <h1>Pilih materi yang ingin diproses</h1> -->
    <ol>
        <li>Penggunaan IF</li>
        <li>Penggunaan SWITCH, CASE</li>
        <li>Penggunaan Looping</li>
        <li>Penggunaan Array</li>
    </ol>

    <form method="post">
        <label for="materi">Pilih Materi :</label>
        <input type="number" id="materi" name="materi" min="1" max="4" required>
        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $materi = $_POST['materi'];

        switch ($materi) {
            case 1:
                echo '<form method="post">
                    <label for="nilai">Masukkan nilai:</label>
                    <input type="number" id="nilai" name="nilai" required>
                    <input type="hidden" name="materi" value="1">
                    <button type="submit">Kirim</button>
                </form>';
                break;
            case 2:
                echo '<form method="post">
                    <label for="angka1">Masukkan angka pertama:</label>
                    <input type="number" id="angka1" name="angka1" required><br>
                    <label for="angka2">Masukkan angka kedua:</label>
                    <input type="number" id="angka2" name="angka2" required><br>
                    <label for="operator">Pilih operator:</label>
                    <select id="operator" name="operator" required>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                    <input type="hidden" name="materi" value="2">
                    <button type="submit">Kirim</button>
                </form>';
                break;
            case 3:
                bilanganGenap();
                break;
            case 4:
                perkalianMatriks();
                break;
            default:
                echo "Pilihan tidak valid.";
        }
    }

    if (isset($_POST['nilai'])) {
        $nilai = $_POST['nilai'];
        nilaiAkhir($nilai);
    }

    if (isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['operator'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        kalkulator($angka1, $angka2, $operator);
    }

    function nilaiAkhir($nilai)
    {
        if ($nilai >= 80) {
            $grade = "A";
        } elseif ($nilai >= 75) {
            $grade = "B";
        } elseif ($nilai >= 65) {
            $grade = "C";
        } elseif ($nilai >= 50) {
            $grade = "D";
        } else {
            $grade = "E";
        }
        echo "Nilai akhir: $nilai, Grade: $grade";
    }

    function kalkulator($angka1, $angka2, $operator)
    {
        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 == 0) {
                    $hasil = "Error: Pembagian dengan nol!";
                } else {
                    $hasil = $angka1 / $angka2;
                }
                break;
            default:
                $hasil = "Operator tidak valid";
        }
        echo "Hasil dari $angka1 $operator $angka2 = $hasil";
    }

    function bilanganGenap()
    {
        $jumlah = 0;
        echo "Bilangan genap yang habis dibagi 3:<br>";
        for ($i = 0; $i <= 100; $i += 2) {
            if ($i % 3 == 0) {
                echo $i . " ";
                $jumlah++;
            }
        }
        echo "<br>Jumlah bilangan tersebut: $jumlah";
    }

    function perkalianMatriks()
    {
        $matriks1 = [
            [1, 2],
            [3, 4]
        ];
        $matriks2 = [
            [5, 6],
            [7, 8]
        ];

        $hasil = [];

        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                $hasil[$i][$j] = 0;
                for ($k = 0; $k < 2; $k++) {
                    $hasil[$i][$j] += $matriks1[$i][$k] * $matriks2[$k][$j];
                }
            }
        }

        echo "Hasil perkalian matriks:<br>";
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 2; $j++) {
                echo $hasil[$i][$j] . " ";
            }
            echo "<br>";
        }
    }
    ?>
</body>

</html>