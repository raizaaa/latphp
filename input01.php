<html>
<head><title>Pengolahan Form</title></head>
<body>
<form action="" method="POST" name="input">
Nama Anda : <input type="text" name="nama"><br>
<input type="submit" name="Input" value="Input">
</FORM>
</body>
</html>
<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
echo "Nama Anda : <b>$nama</b>";
}
?>