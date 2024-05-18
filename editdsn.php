<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dan
dikirim melalui link (get) -->
<?php
 $kode=$_GET['kd_dosen'];
 //membuat sql tampil data
 $sqldatadsn="SELECT * FROM tbl_dsn WHERE kd_dosen='$kode'";
 //ambil koneksi data
require_once "koneksi.php";
 //proses sql
 $query=mysqli_query($koneksi,$sqldatadsn);
 //mengubah data ke array asosiatif, tidak menggunakan perulangan karenadatanya hanya 1
 $data=mysqli_fetch_assoc($query);
//selanjutnya tampilkan pada field dibawah.
 ?>
 <h2>Update Data Dosen</h2>
 <!-- tag form -->
 <form action="updatedsn.php" method="POST">
 <label>Kode Dosen :</label>
 <input type="text" name="kode" value="<?=$data['kd_dosen']?>"
placeholder="Nomor Induk Mahasiswa" required>
<br>
<label>Nama Dosen : </label> <input type="text" name="namadsn" id="namadsn" value="<?=$data['nama']?>"
placeholder="Nama Lengkap" required>
<br>
<label for="">Alamat : </label>
<input type="text" name="alamatdsn" id="alamatdsn"
value="<?=$data['alamat']?>" placeholder="Alamat Lengkap" required>
<br>
<label>Tanggal Lahir : </label>
<input type="date" name="ttldsn" id="ttldsn" 
value="<?=$data['tgllhir']?>"placeholder="zzzz-yy-xx" required>
<br>
<label for="">Agama : </label>
 <select name="agmdsn" id="agmdsn">
<option value="<?=$data['agama']?>"
selected><?=$data['agama']?></option>
        <option value="Islam" selected>Islam</option>
        <option value="Kristen" selected>Kristen</option>
        <option value="Khatolik" selected>Khatolik</option>
        <option value="Hindu" selected>Hindu</option>
        <option value="Buddha" selected>Buddha</option>
        <option value="Khonghucu" selected>Khonghucu</option>
 </select>
 <br>
 <label for="">Mata Kuliah : </label>
<input type="text" name="matkul" id="matkul"
value="<?=$data['matkul']?>" placeholder="Mata Kuliah yang diampuh" required>
<br>
<label for="">Wali Kelas : </label>
<input type="text" name="wlkls" id="wlkls"
value="<?=$data['walikls']?>" placeholder="Wali kelas" required>
<br>
<label for="">Tahun masuk : </label>
<input type="text" name="thnmsk" id="thnmsk"
value="<?=$data['thnmasuk']?>" placeholder="Tuhun Masuk" required>
<br>
<label for="">No. Telpon : </label>
<input type="text" name="nohp" id="nohp"
value="<?=$data['alamat']?>" placeholder="No. Telpon" required>
<br>
<button type="submit" name="kirim" value="kirim">Update Data</button>
</form>
