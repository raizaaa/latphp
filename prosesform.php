<?php
    if (isset($_POST['simpan'])) {
        $no = $_POST['np'];
        echo "No Pendaftaran : $no<br>";
        $nisn = $_POST['nisn'];
        echo "<br>NISN : $nisn<br>";
        $nama = $_POST['nama'];
        echo "<br>Nama: $nama<br>";
        $alamat = $_POST['alamat'];
        echo "<br>Alamat : $alamat<br>";
        $tela = $_POST['tela'];
        echo "<br>Tempat Lahir : $tela<br>";
        $tala = $_POST['tala'];
        echo "<br>Tanggal Lahir : $tala<br>";
        $asek = $_POST['asek'];
        echo "<br>Asal Sekolah : $asek<br>";
        $jenkel = $_POST['jenkel'];
        echo "<br>Jenis Kelamin : $jenkel<br>";
        $tiba = $_POST['tb'];
        echo "<br>Tinggi Badan : $tiba<br>";
        $beba = $_POST['bb'];
        echo "<br>Berat Badan : $beba<br>";
        $jurusan = $_POST['jurusan'];
        echo "<br>Jurusan : $jurusan<br>";
        echo "<br>Hobby : <br>";
        if (isset($_POST['hb1'])) {
            echo "- " . $_POST['hb1'] . "<br>";
        }
        if (isset($_POST['hb2'])) {
            echo "- " . $_POST['hb2'] . "<br>";
        }
        if (isset($_POST['hb3'])) {
            echo "- " . $_POST['hb3'] . "<br>";
        }
        if (isset($_POST['hb4'])) {
            echo "- " . $_POST['hb4'] . "<br>";
        }
        if (isset($_POST['hb5'])) {
            echo "- " . $_POST['hb5'] . "<br>";
        }
        $agama = $_POST['agama'];
        echo "<br>Agama : $agama<br>";
        $nayah = $_POST['nmayh'];
        echo "<br>Nama Ayah : $nayah<br>";
        $pekayah = $_POST['pkayh'];
        echo "<br>Pekerjaan Ayah : $pekayah<br>";
        $nabu = $_POST['nmibu'];
        echo "<br>Nama Ibu : $nabu<br>";
        $pekibu = $_POST['pkibu'];
        echo "<br>Pekerjaan Ibu : $pekibu<br>";
    }
?>