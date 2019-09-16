<?php
/********************************************************
Halaman ini merupakan halaman logout, dimana kita menghapus
session yang ada.
*********************************************************/
session_start();
if (isset($_SESSION['login'])) {
    unset ($_SESSION);
    session_destroy();
    //
    echo "<h1>Anda Sudah Berhasil LOGOUT</h1>";
    echo "<h2>Klik <a href='login.php'>Disini</a> Untuk LOGIN Kembali</h2>";
    echo "<h2>Anda Sekarang Tidak Bisa Masuk Ke Halaman
    <a href='forminput01.php'></a> Lagi</h2>";
}
?>