<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalam
 require_once "koneksi.php";
 //cek form yang di kirim
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
 //ambil data dari form, simpan dalam variabel
 $nim=$_POST['nim']; //yg didalam tanda kutip harus sama dengan name di form
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $prodi=$_POST['prodi'];
 $umur=$_POST['umur'];

 //buat SQL untuk simpan data
 $sqlupdate="UPDATE tbl_mhsw SET name='$nama', address='$alamat',prodi='$prodi', age='$umur' WHERE nim='$nim'";

 //Proses ke mysql server, menggunakan mysqli_query()
 if(mysqli_query($koneksi,$sqlupdate))
 {
 //redirect ke halaman tampildata.php jika proses simpan berhasil
 echo "<script> alert('Data sudah diupdate'); 
 window.location.assign('tampildata.php'); </script>";
 } 
 }
 //Sampai disini program sudah siap, kita coba jalankan.
 //Ok. program untuk tambah data (save) sudah selesai.
 //ketika input jgn menggunakan nim yg sama karena nim adalah primary key, jika ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya.