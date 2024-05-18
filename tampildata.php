<?php

//mengambil program koneksidb, dengan menggunakan fungsi include
include "koneksi.php";
//membuat SQL untuk menampilkan data 
$sqltampil = "SELECT * FROM tbl_mhsw";
//melakukan proses query ke database
$query = mysqli_query($koneksi, $sqltampil) or die("SQL Error");
$nomor = 1; //untuk membuat nomor untuk di tabel hasil query

?>

<h2>Data Mahasiswa STMIK Royal</h2>
<!-- Disini kita buat link untuk menambahkan data, dimana link ini nantinya akan memanggil form tambah data -->
<a href="formtambah.php">Tambah Data</a>
<br><br>
<table width="100%" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Prodi</th>
            <th>Umur</th>
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
            <td><?= $data['nim'] ?></td>
            <td><?= $data['name'] ?></td>
            <td><?= $data['address'] ?></td>
            <td><?= $data['prodi'] ?></td>
            <td><?= $data['age'] ?></td>
            <td>
                <a href="formedit.php?nim=<?= $data['nim']?>">Edit</a> | <a href="delete.php?nim=<?= $data['nim']?>">Delete</a>
            </td>
         </tr>
         <?php $nomor++;
        } //akhir dari perulangan ?>
       
    </tbody>
</table>
