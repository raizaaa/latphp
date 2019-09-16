<?php
/****************************************************
Nama file : session01.php
Halaman ini merupakan halaman contoh penciptaan session.
Perintah session_start() harus ditaruh di perintah pertama
tanpa spasi di depannya. Perintah session_start() harus ada
pada setiap halaman yang berhubungan dengan session
*****************************************************/
session_start();
    if (isset ($_POST['Login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
    if ($user == "keiza" && $pass == "1803") {
        $_SESSION['login']= $user;
        echo "<h1>Anda Berhasil LOGIN-!</h1>";
        echo "<h2>Klik <a href='session02.php'>Disini (session02.php)</a>
        untuk menujiu ke halaman pemeriksaan session";
    }
} else {
?>
<html>
<head>
    <title>Login Here-!...</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Login Here-!...</h2>
        Username : <input type="text" name="user"><br>
        Password : <input type="password" name="pass"><br>
        <input type="submit" name="Login" value="Log In">
    </form>
</body>
</html>
<?php } ?>