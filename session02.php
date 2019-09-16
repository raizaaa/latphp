<?php
/*************************************************************
Halaman ini merupakan contoh halaman pemeriksaan session. Peme-
riksaan session biasanya dilakukan jika suatu halaman memiliki
akses terbatas. Misalnya harus login terlebih dahulu.
**************************************************************/
session_start();

if (isset($_SESSION['login'])) {
    echo "<h1>Selamat Datang ". $_SESSION['login'] . "</h1>";
    echo "<h2>Halaman Ini Hanya Bisa Diakses Jika Anda Sudah Login</h2>";
    echo "<h2>Klik <a href='session03.php'>Disini (session03.php)</a>Untuk LOGOUT</h2>";
} else {
    die ("<h2>Anda Belum Login-!. Anda Tidak Bisa Masuk Ke Halaman Ini.
            Silahkan Login <a href='session01.php'>Disini</a></h2>");
}
?>