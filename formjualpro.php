<?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nm'];
        echo "Nama : $nama";
        echo "<br><br>";
        echo "<i>Alamat</i>";
        echo "<br><br>";
        $jalan = $_POST['jl'];
        $kec = $_POST['kec'];
        $kota = $_POST['kta'];
        $prov = $_POST['prov'];
        echo "Jalan/kp : $jalan";
        echo "<br><br>";
        echo "Kecamatan : $kec";
        echo "<br><br>";
        echo "Kota : $kota";
        echo "<br><br>";
        echo "Provinsi : $prov";
        echo "<br><br>";
        echo "<b>Tentang Barang</b>";
        echo "<br><br>";
        $tgl = $_POST['tp'];
        echo "Tanggal Pembelian : $tgl";
        echo "<br><br>";
        $naba = $_POST['nb'];
        echo "Nama Barang : $naba";
        echo "<br><br>";
        $haba = $_POST['hb'];
        echo "Harga Barang (satuan) : Rp. $haba";
        echo "<br><br>";
        $desc = $_POST['dsc'];
        echo "Deskripsi : $desc";
        echo "<br><br>";
        $qty = $_POST['jb'];
        echo "Jumlah Barang : $qty";
        echo "<br><br>";
        $total = $haba*$qty;
        if ($qty > 10) {
            echo "<h3>Anda Mendapatkan Diskon 20% Karna Jumlah Pembelian Lebih Dari 10</h3>";
            echo "Total Pembelian: Rp. $total";
            echo "<br><br>";
            $dis = ($haba*20/100)*$qty;
            $todis = $total-$dis;
            echo "Diskon : Rp. $dis";
            echo "<br><br>";
            echo "Total Pembayaran : Rp. $todis";
            echo "<br><br>";
        }
        elseif ($qty > 5) {
            echo "<h3>Anda Mendapatkan Diskon 10% Karna Jumlah Pembelian Lebih Dari 5</h3>";
            echo "Total Pembelian : Rp. $total";
            echo "<br><br>";
            $dis = ($haba*10/100)*$qty;
            $todis = $total-$dis;
            echo "Diskon : Rp. $dis";
            echo "<br><br>";
            echo "Total Pembayaran : Rp. $todis";
            echo "<br><br>";
        }
        elseif ($qty < 0) {
            echo "<h3>Maaf Pesanan Anda Tidak Dapat Kami Proses</h3>";
        }
        elseif ($qty < 5) {
            echo "<h3>Anda Tidak Mendapatkan Diskon</h3>";
            echo "Total Pembayaran : Rp. $total";
            echo "<br><br>";
        }
    }
?>