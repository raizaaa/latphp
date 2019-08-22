<?php
if (isset($_POST['regis'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenkel = $_POST['jenkel'];
    $agama = $_POST['agama'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
if ($email == "keiza@gmail.com" && $pass == "1803") {
    echo "Nama : $nama <br>";
    echo "Alamat : $alamat <br>";
    echo "Jenkel : $jenkel <br>";
    echo "Agama : $agama <br>";
    echo "Email : $email <br>";
    echo "<h2>Register Berhasil. Akun Anda Telah Aktif</h2>";
} else{
    echo "Nama : $nama <br>";
    echo "Alamat : $alamat <br>";
    echo "Jenkel : $jenkel <br>";
    echo "Agama : $agama <br>";
    echo "Email : $email <br>";
    echo "<h2>Registrasi Gagal. Akun Anda Tidak/Belum Aktif</h2>";
}
}
?>