<h2>Tambah Data</h2>

<!-- tag form -->
<form action="simpandsn.php" method="POST">
    <label>Kode Dosen : </label>
    <input type="text" name="kode" id="kode" placeholder="Kode Dosen" required>
    <br>
    <label>Nama Dosen : </label>
    <input type="text" name="namadsn" id="namadsn" placeholder="Nama Lengkap" required>
    <br>
    <label>Alamat : </label>
    <input type="text" name="alamatdsn" id="alamatdsn" placeholder="Alamat Lengkap" required>
    <br>
    <label>Tanggal Lahir : </label>
    <input type="date" name="ttldsn" id="ttldsn" placeholder="zzzz-yy-xx" required>
    <br>
    <label for="">Agama : </label>
    <select name="agmdsn" id="agmdsn">
        <option value="Islam" selected>Islam</option>
        <option value="Kristen" selected>Kristen</option>
        <option value="Khatolik" selected>Khatolik</option>
        <option value="Hindu" selected>Hindu</option>
        <option value="Buddha" selected>Buddha</option>
        <option value="Khonghucu" selected>Khonghucu</option>
    </select>
    <br>
    <label for="">Mata Kuliah : </label>
    <input type="text" name="matkul" id="matkul" placeholder="Mata Kuliah yang diampuh" required>
    <br>
    <label for="">Wali Kelas: </label>
    <input type="text" name="wlkls" id="wlkls" placeholder="Wali Kelas" required>
    <br>
    <label for="">Tahun Masuk: </label>
    <input type="text" name="thnmsk" id="tynmsk" placeholder="zxxz" required>
    <br>
    <label for="">No. Telpon: </label>
    <input type="text" name="nohp" id="nohp" placeholder="no. Telpon" required>
    <br>
    <button type="submit" name="kirim" value="kirim">Kirim Data</button>
</form>