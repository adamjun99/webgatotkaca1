<!DOCTYPE html>
<html>
<head>
  <title>Formulir Pendaftaran</title>
</head>
<body>
  <h1>Formulir Pendaftaran</h1>
  <form method="POST" action="PendaftaranProses.php">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="nim">NIM:</label>
    <input type="text" id="nim" name="nim" required><br><br>

    <label for="email">Email UII:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <select id="jenis_kelamin" name="jenis_kelamin" required>
      <option value="">Pilih Jenis Kelamin</option>
      <option value="laki">Laki-laki</option>
      <option value="perempuan">Perempuan</option>
    </select><br><br>

    <label for="program_studi">Program Studi:</label>
    <select id="program_studi" name="program_studi" required>
      <option value="">Pilih Program Studi</option>
      <option value="teknik_industri">Teknik Industri</option>
      <option value="teknik_mesin">Teknik Mesin</option>
      <option value="teknik_elektro">Teknik Elektro</option>
      <option value="informatika">Informatika</option>
    </select><br><br>

    <label for="divisi">Divisi yang Dipilih:</label>
    <select id="divisi" name="divisi" required>
      <option value="">Pilih Divisi</option>
      <option value="mekanik">Mekanik</option>
      <option value="elektrik">Elektrik</option>
      <option value="program">Program</option>
      <option value="desain">Desain</option>
      <option value="csmd">CSMD</option>
      <option value="Afd">AFD</option>
      <option value="sprd">SPRD</option>
    </select><br><br>

    <!-- <label>Divisi yang Dipilih:</label><br>
    <input type="radio" id="mekanik" name="divisi" value="mekanik" required>
    <label for="mekanik">Mekanik</label><br>
    <input type="radio" id="elektrik" name="divisi" value="elektrik" required>
    <label for="elektrik">Elektrik</label><br>
    <input type="radio" id="program" name="divisi" value="program" required>
    <label for="program">Program</label><br>
    <input type="radio" id="csmd" name="divisi" value="csmd" required>
    <label for="csmd">CSMD</label><br><br>  -->

    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>

    <label for="akun_instagram">Akun Instagram:</label>
    <input type="text" id="akun_instagram" name="akun_instagram" required><br><br>

    <label for="foto">Foto:</label>
    <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

    <input type="submit" name="submit" value="Daftar">
    </form>
</body>
</html>

