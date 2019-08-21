<html>
<head><title>Latihan Form</title></head>
<body>
<form action="" method="POST" name="input">
Nama : <input type="text" name="nama"><br>
Nilai1 : <input type="text" name="nilais"><br>
Nilai2 : <input type="text" name="nilaid"><br>
<input type="submit" name="Input" value="Input">
<input type="submit" name="Resets" value="Hapus">
</form>
</body>
</html>
<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
$nilai1 = $_POST['nilais'];
$nilai2 = $_POST['nilaid'];
$rata = ($nilai1+$nilai2)/2;
echo "Nama : <b>$nama</b><br>";
echo "Nilai 1 : <b>$nilai1</b><br>";
echo "Nilai 2 : <b>$nilai2</b><br>";
echo "Nilai Rata-rata : <b>$rata</b><br>";
}
?>