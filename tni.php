<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TNI</title>
</head>
<body>
    <fieldset>
    <legend>
    TNI
    </legend>
    <form action="" method="get">
        <label for="">Berat Badan</label>
        <input type="number" min="1" name="b" required>
        <br>
        <label for="">Tinggi Badan</label>
        <input type="number" min="1" name="t" required><br>
        <input type="submit" name="simpan" value="simpan">
    </form>
    </fieldset>

    <?php
    if (isset($_GET['simpan'])) {
        $bb = $_GET['b'];
        $tb = $_GET['t'];
        function tni($berat , $tinggi){
        if ($berat < 60 && $berat  && $tinggi > 165) {
            $e = "Selamat Anda Diterima";
        }
        else {
            $e = "Maaf Anda Tidak Diterima";
        }
        return $e;
    }
        $terima = tni($bb, $tb);
        echo "Berat Badan anda : $bb<br> Tinggi Badan anda : $tb<br> Status Anda : $terima";
    }
    ?>
</body>
</html>