<html>
<head>    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>
    Luas lingkaran
    </legend>
    <form action="" method="get">
        <label for="">lingkaran</label>
        <input type="number" min="1" name="r" required>
        <br>
        <input type="submit" name="simpan" value="simpan">
    </form>
    </fieldset>

    <?php
    if (isset($_GET['simpan'])) {
        $er = $_GET['r'];
        function lingkaran($r){
            $luas = 3.14 * $r * $r;
            return $luas;
        }
        function keliling($k){
            $keliling = 2 * $k * 3.14;
            return $keliling;
        }
        $luas = lingkaran($er);
        echo "Luas Lingkaran : $luas<br>";
        $keliling = keliling($er);
        echo "keliling Lingkaran : $keliling";

    }
    ?>
</body>
</html>