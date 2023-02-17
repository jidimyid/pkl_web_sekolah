<?php
session_start();


$username = $_POST['nama'];
$telepon = $_POST['notel'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];

    include "koneksi.php";
    
    $query="INSERT INTO `tb_guru`(`nomer`, `nama`, `notel`, `alamat`, `jabatan`) 
    VALUES ('','$username','$telepon','$alamat','$jabatan')";
    $hasil=mysqli_query($conn, $query);

    if ($hasil) 
    echo "Data sudah berhasil ditambahkan<br> <a href='guru-edit.php'>Kembali ke halaman kelola</a>";



?>