<?php
if (isset($_POST['Login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    // (|| -> pipe)
    // (&& -> andand)
if ($user == "keiza" && $pass == "1905") {
    echo "<h2>Login Berhasil</h2>";
} else {
    echo "<h2>Login Gagal</h2>";
}
}
?>