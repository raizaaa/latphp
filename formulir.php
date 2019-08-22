<html>
<head><title>Form Pendaftaran</title></head>
<body>
    <fieldset>
    <legend>Formulir Pendaftaran</legend>
    <form action="prosesdaftar.php" method="POST" name="input">
        <h2>Masukkan Data Anda</h2>
            No Pendaftaran : 
            <br><input type="number" name="np" required><br>
            NISN : 
            <br><input type="text" name="nisn" required><br>
            Nama : 
            <br><input type="text" name="nama" required><br>
            Alamat : 
            <br><input type="text" name="alamat" required><br>
            Tempat Lahir : 
            <br><input type="text" name="tela" required><br>
            Tanggal Lahir : 
            <br><input type="date" name="Tala" required><br>
            Asal Sekolah : 
            <br><input type="text" name="asek" required><br>
            Jenis Kelamin : 
            <br><input type="radio" name="jenkel" value="Perempuan" checked>Perempuan
            <br><input type="radio" name="jenkel" value="Laki-laki">Laki-laki<br>
            Tinggi Badan : 
            <br><input type="text" name="tb" required><br>
            Berat Badan : 
            <br><input type="text" name="bb" required><br>
            Jurusan :   
            <select name="jurusan">
            <option value="RPL">RPL</option>
            <option value="TSM">TSM</option>
            <option value="TKR">TKR</option>
            </select> <br>  
            Hobby :<br>
            <input type="checkbox" name="hb1" value="Masak">Masak<br>
            <input type="checkbox" name="hb2" value="Bernyanyi">Bernyanyi<br>
            <input type="checkbox" name="hb3" value="Olahraga">Olahraga<br>
            <input type="checkbox" name="hb4" value="Menari">Menari<br>
            <input type="checkbox" name="hb5" value="Bermain">Bermain<br>
            Agama :
            <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            </select><br>
            Nama Ayah : 
            <br><input type="text" name="nmayh" required><br>
            Pekerjaan Ayah : 
            <br><input type="text" name="pkayh" required><br>
            Nama Ibu : 
            <br><input type="text" name="nmibu" required><br>
            Pekerjaan Ibu : 
            <br><input type="text" name="pkibu" required><br>
            <input type="submit" name="simpan" value="Save">
            <input type="reset" name="reset" value="Reset">
    </form>
    </fieldset>
</body>
</html>