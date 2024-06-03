<!DOCTYPE html>
<html>

<head>
    <title>Buku Tamu</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="komentar">Komentar:</label><br>
        <textarea id="komentar" name="komentar" rows="5" cols="40" required></textarea><br><br>

        <input type="submit" value="Simpan">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $komentar = $_POST["komentar"];

        // Simpan data ke dalam file teks
        $file = fopen("buku_tamu.txt", "a");
        fwrite($file, "Nama: $nama\n");
        fwrite($file, "Email: $email\n");
        fwrite($file, "Komentar: $komentar\n\n");
        fclose($file);

        echo "<h2>Terima kasih sudah berkomentar🙏</h2>";
        echo "<p>Berikut adalah komentar yang Anda kirim:</p>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Komentar:</strong> $komentar</p>";
    }

    ?>

</body>

</html>