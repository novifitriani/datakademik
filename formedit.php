<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dan
dikirim melalui link (get) -->
 <?php
 $nim=$_GET['nim'];
 //membuat sql tampil data
 $sqldata="SELECT * FROM tbl_mhsw WHERE nim='$nim'";
 //ambil koneksi data
require_once "koneksi.php";
 //proses sql
 $query=mysqli_query($koneksi,$sqldata);
 //mengubah data ke array asosiatif, tidak menggunakan perulangan karenadatanya hanya 1
 $data=mysqli_fetch_assoc($query);
//selanjutnya tampilkan pada field dibawah.
 ?>
 <h2>Update Data Mahasiswa</h2>
 <!-- tag form -->
 <form action="update.php" method="POST">
 <label>Nomor Induk Mahasiswa :</label>
 <input type="text" name="nim" value="<?=$data['nim']?>"
placeholder="Nomor Induk Mahasiswa" required>
<br>
<label>Nama Mahasiswa :</label> <input type="text" name="nama" id="nama" value="<?=$data['name']?>"
placeholder="Nama Lengkap" required>
<br>
<label for="">Alamat :</label>
<input type="text" name="alamat" id="alamat"
value="<?=$data['address']?>" placeholder="Alamat Lengkap" required>
<br>
<label for="">Program Studi :</label>
 <select name="prodi" id="prodi">
<option value="<?=$data['prodi']?>"
selected><?=$data['prodi']?></option>
 <option value="Sistem Informasi">Sistem Informasi</option>
 <option value="Sistem Komputer">Sistem Komputer</option>
 <option value="Teknik Informatika">Teknik Infomatika</option>
 </select>
 <br>
<label for="">Umur :</label> <input type="number" name="umur" id="umur" value="<?=$data['age']?>" required>
 <br>
 <button type="submit" name="kirim" value="kirim">Update Data</button>
</form>
