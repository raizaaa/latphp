<?php
if (isset($_POST['Input'])) {
    $Nama1 = $_POST ['nama1'];
    $Nama2 = $_POST ['nama2'];
    $Nama3 = $_POST ['nama3'];
    $Nama4 = $_POST ['nama4'];
    echo "<b>Nama Sahabat Sahabat Dekatku : </b><br>";
    echo $Nama1 . "<br>";
    echo $Nama2 . "<br>";
    echo $Nama3 . "<br>";
    echo $Nama4 . "<br>";
}
?>