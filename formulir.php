<html>
<head><title>Form Pendaftaran</title></head>
<body>
    <fieldset>
    <legend align="center"><b>Formulir Pendaftaran</b></legend>
    <form action="prosesform.php" method="POST" name="input">
    <table border=0 align="center" width=100% >
        <tr>
        <td>No Pendaftaran</td>
        <td>: <input type="number" name="np" required></td>
        </tr>
        <tr>
        <td>NISN</td>
        <td>: <input type="text" name="nisn" required></td>
        </tr>
        <tr>
        <td>Nama</td>
        <td>: <input type="text" name="nama" required></td>
        </tr>
        <tr>
        <td>Alamat</td>
        <td>: <input type="text" name="alamat" required></td>
        </tr>
        <tr>
        <td>Tempat Lahir</td>
        <td>: <input type="text" name="tela" required></td>
        </tr>
        <tr>
        <td>Tanggal Lahir</td>
        <td>: <input type="date" name="tala" required></td>
        </tr>
        <tr>
        <td>Asal Sekolah</td>
        <td>: <input type="text" name="asek" required></td>
        </tr>
        <tr>
        <td>Jenis Kelamin</td>
        <td>: <input type="radio" name="jenkel" value="Perempuan" checked>Perempuan
            <input type="radio" name="jenkel" value="Laki-laki">Laki-laki</td>
        </tr>
        <tr>
        <td>Tinggi Badan</td>
        <td>: <input type="number" name="tb" required></td>
        </tr>
        <tr>
        <td>Berat Badan</td>
        <td>: <input type="number" name="bb" required></td>
        </tr>
        <tr>
        <td>Jurusan</td>
        <td>: <select name="jurusan">
            <option value="RPL">RPL</option>
            <option value="TSM">TSM</option>
            <option value="TKR">TKR</option>
            </select></td>
        </tr>
        <tr>
        <td>Hobby</td>
        <td>:<input type="checkbox" name="hb1" value="Tidur">Tidur
            <input type="checkbox" name="hb2" value="Nafas">Nafas
            <input type="checkbox" name="hb3" value="Ngedip">Ngedip
            <input type="checkbox" name="hb4" value="Makan">Makan
            <input type="checkbox" name="hb5" value="Gerak">Gerak</td>
        </tr>
        <tr>
        <td>Agama</td>
        <td>: <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            </select></td>
        </tr>
        <tr>
        <td>Nama Ayah</td>
        <td>: <input type="text" name="nmayh" required></td>
        </tr>
        <tr>
        <td>Pekerjaan Ayah</td>
        <td>: <input type="text" name="pkayh" required></td>
        </tr>
        <tr>
        <td>Nama Ibu</td>
        <td>: <input type="text" name="nmibu" required></td>
        </tr>
        <tr>
        <td>Pekerjaan Ibu</td>
        <td>: <input type="text" name="pkibu" required></td>
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