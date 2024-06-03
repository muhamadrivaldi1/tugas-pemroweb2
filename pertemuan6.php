<!DOCTYPE html>
<html>

<head>
    <title>Menghitung Luas Segitiga</title>
</head>

<body>
    <h1>Menghitung Luas Segitiga</h1>
    <form method="post" action="">
        <label for="alas">Alas      :</label>
        <input type="number" name="alas[]" id="alas" required><br><br>
        <label for="tinggi">Tinggi  :</label>
        <input type="number" name="tinggi[]" id="tinggi" required><br><br>
        <button type="button" id="tambah">Tambah</button><br><br>
        <input type="submit" name="submit" value="Proses">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        if (count($alas) != count($tinggi)) {
            echo "Jumlah alas dan tinggi harus sama.";
        } else {
            echo "<table>
                <tr>
                  <th>No </th>
                  <th>Alas</th>
                  <th>Tinggi</th>
                  <th>Luas</th>
                </tr>";
            $i = 1;
            foreach ($alas as $a) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $a . "</td>";
                echo "<td>" . $tinggi[$i - 1] . "</td>";
                echo "<td>" . (0.5 * $a * $tinggi[$i - 1]) . "</td>";
                echo "</tr>";
                $i++;
            }
            echo "</table>";
        }
    }
    ?>

    <script>
        document.getElementById("tambah").addEventListener("click", function() {
            var alas = document.createElement("input");
            alas.type = "number";
            alas.name = "alas[]";
            alas.id = "alas";
            alas.required = true;

            var tinggi = document.createElement("input");
            tinggi.type = "number";
            tinggi.name = "tinggi[]";
            tinggi.id = "tinggi";
            tinggi.required = true;

            var br = document.createElement("br");

            document.querySelector("form").insertBefore(alas, document.querySelector("button"));
            document.querySelector("form").insertBefore(tinggi, document.querySelector("button"));
            document.querySelector("form").insertBefore(br, document.querySelector("button"));
        });
    </script>
</body>

</html>