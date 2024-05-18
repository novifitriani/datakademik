<h2>Tambah Data</h2>

<!-- tag form -->
<form action="save.php" method="POST">
    <label>Nomer Induk Mahasiswa : </label>
    <input type="text" name="nim" id="nama" placeholder="Nomor Induk Mahasiswa" required>
    <br>
    <label>Nama Mahasiswa : </label>
    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required>
    <br>
    <label>Alamat : </label>
    <input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap" required>
    <br>
    <label for="">Program Studi : </label>
    <select name="prodi" id="prodi">
        <option value="Sistem Informasi" selected>Sistem Informasi</option>
        <option value="Sistem Komputer" selected>Sistem Komputer</option>
        <option value="Teknik Informatika" selected>Teknik Informatika</option>
    </select>
    <br>
    <label for="">Umur : </label>
    <input type="number" name="umur" id="umur" required>
    <br>
    <button type="submit" name="kirim" value="kirim">Kirim Data</button>
</form>