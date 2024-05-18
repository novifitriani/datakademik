<?php
 //Disini akan digunakan kode PHP untuk memproses data
 //Ambil koneksi ke basisdata, karena data ini akan disimpan didalam
 require_once "koneksi.php";
 //cek form yang di kirim
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
 //ambil data dari form, simpan dalam variabel
 $kode=$_POST['kode']; //yg didalam tanda kutip harus sama dengan name di form
 $namadsn=$_POST['namadsn'];
 $alamatdsn=$_POST['alamatdsn'];
 $ttldsn=$_POST['ttldsn'];
 $agmdsn=$_POST['agmdsn'];
 $matkul=$_POST['matkul'];
 $wlkls=$_POST['wlkls'];
 $thnmsk=$_POST['thnmsk'];
 $nohp=$_POST['nohp'];

 //buat SQL untuk simpan data
 $updatedsn="UPDATE tbl_dsn SET nama='$namadsn', alamat='$alamatdsn', tgllhir='$ttldsn', agama='$agmdsn', matkul='$matkul', walikls='$wlkls', thnmasuk='$thnmsk', no_tlpn='$nohp' WHERE kd_dosen='$kode'";

 //Proses ke mysql server, menggunakan mysqli_query()
 if(mysqli_query($koneksi,$updatedsn))
 {
 //redirect ke halaman tampildata.php jika proses simpan berhasil
 echo "<script> alert('Data sudah diupdate'); 
 window.location.assign('tampildsn.php'); </script>";
 } 
 }
 //Sampai disini program sudah siap, kita coba jalankan.
 //Ok. program untuk tambah data (save) sudah selesai.
 //ketika input jgn menggunakan nim yg sama karena nim adalah primary key, jika ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya.