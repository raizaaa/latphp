<html>
<head><title>Register Here</title></head>
<body>
    <fieldset>
    <legend>Halaman Register</legend>
    <form action="prosesregis.php" method="POST" name="input">
        <h2>Masukkan Data Anda</h2>
            Nama : 
            <br><input type="text" name="nama" required><br>
            Alamat : 
            <br><input type="text" name="alamat" required><br>
            Jenis Kelamin : 
            <br><input type="text" name="jenkel" required><br>
            Agama : 
            <br><input type="text" name="agama" required><br>
            Email : 
            <br><input type="text" name="email" required><br>
            Password : 
            <br><input type="password" name="password"><br>
            <input type="submit" name="regis" value="Register">
            <input type="reset" name="reset" value="Reset">
    </form>
    </fieldset>
</body>
</html>