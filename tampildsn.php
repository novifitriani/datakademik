<?php

//mengambil program koneksidb, dengan menggunakan fungsi include
include "koneksi.php";
//membuat SQL untuk menampilkan data 
$sqltampil = "SELECT * FROM tbl_dsn";
//melakukan proses query ke database
$query = mysqli_query($koneksi, $sqltampil) or die("SQL Error");
$nomor = 1; //untuk membuat nomor untuk di tabel hasil query

?>

<h2>Data Dosen STMIK Royal</h2>
<!-- Disini kita buat link untuk menambahkan data, dimana link ini nantinya akan memanggil form tambah data -->
<a href="tambahdsn.php">Tambah Data</a>
<br><br>
<table width="100%" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Dosen</th>
            <th>Nama Dosen</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Mata Kuliah</th>
            <th>Wali Kelas</th>
            <th>Tahun Masuk</th>
            <th>No. Telpon</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        //jika data lebih dari 1, maka kita bisa menampilkan dengan menggunakan perintah perulangan seperti (for, while, do-while, foreach)
        //mysqli_fech_assoc merupakan fungsi yang digunakan untuk mengkonversi data menjadi data arrayassosiatif
        while ($data = mysqli_fetch_assoc($query))
        {
         ?>
         <tr>
            <!-- untuk menampilkan data, kita menggunakan tag pendek php yaitu seperti dibawah -->
            <td><?= $nomor ?></td>
            <td><?= $data['kd_dosen'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['tgllhir'] ?></td>
            <td><?= $data['agama'] ?></td>
            <td><?= $data['matkul'] ?></td>
            <td><?= $data['walikls'] ?></td>
            <td><?= $data['thnmasuk'] ?></td>
            <td><?= $data['no_tlpn'] ?></td>
            <td>
                <a href="editdsn.php?kd_dosen=<?= $data['kd_dosen']?>">Edit</a> | <a href="hapusdsn.php?kd_dosen=<?= $data['kd_dosen']?>">Delete</a>
            </td>
         </tr>
         <?php $nomor++;
        } //akhir dari perulangan ?>
       
    </tbody>
</table>
