<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/aww.css">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
        
    <div id="it">
    <img src="assets/img/ss.png" id="its">
    <h2>Formulir Pendaftaran Siswa Baru</h2>
    <form action="proses-pendaftaran.php" method="POST">

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label  for="jenis_kelamin">Jenis Kelamin: </label>
            <label ><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label ><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

    </form>
    </div>

    </body>
</html>