<html>
<head><title>Form Penjualan</title></head>
<body>
    <fieldset>
    <legend align="center"><b>Form Penjualan</b></legend>
    <form action="formjualpro.php" method="POST" name="input">
    <table border=0 align="center" width=100% >
        <tr>
        <td>Nama</td>
        <td>: <input type="text" name="nm" required></td>
        </tr>
        <tr>
        <td><b>Alamat</b></td>
        </tr>
        <tr>
        <td>Jalan/kp</td>
        <td>: <input type="text" name="jl" required></td>
        </tr>
        <tr>
        <td>Kecamatan</td>
        <td>: <input type="text" name="kec" required></td>
        </tr>
        <tr>
        <td>Kota</td>
        <td>: <input type="text" name="kta" required></td>
        </tr>
        <tr>
        <td>Provinsi</td>
        <td>: <input type="text" name="prov" required></td>
        </tr>
        <tr>
        <tr>
        <td><b>Tentang Barang</b></td>
        </tr>
        <td>Nama Barang</td>
        <td>: <input type="text" name="nb" required></td>
        </tr>
        <tr>
        <td>Harga Barang</td>
        <td>: <input type="number" name="hb" required></td>
        </tr>
        <tr>
        <td>Jumlah Barang</td>
        <td>: <input type="number" min="1" name="jb" required></td>
        </tr>
        <tr>
        <td>Deskripsi</td>
        <td>: <input type="text" name="dsc" required></td>
        </tr>
        <tr>
        <td>Tanggal Pembelian</td>
        <td>: <input type="date" name="tp" required></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" name="simpan" value="Save">
            <input type="reset" name="reset" value="Reset"></td></tr>
    </table>
    </form>
    </fieldset>
</body>
</html>