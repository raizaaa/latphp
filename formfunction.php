<html>
<head>
    <title>Luas Persegi</title>
</head>
<body>
        <fieldset>
        <legend>Luas Persegi</legend>
        <form action="" method="GET">
        <label for="">Sisi</label>
        <input type="number" min="1" name="s" required>
        <br>
        <input type="submit" name="simpan" value="simpan">
        </form>
        </fieldset>

        <?php
        if (isset($_GET['simpan'])) {
            $sisi = $_GET['s'];

            function luas_persegi($s)
            {
                $luas = $s*$s;
                return $luas;
            }
            $luas = luas_persegi($sisi);
            echo "Luas Persegi : $luas";
        }
        ?>

        // luas lingkaran
        // keliling lingkaran
        // pendaftaran tni -> bb -> 60 && tb 165 "Terima"
</body>
</html>

