<?php
session_start();


$username = $_POST['nama'];
$telepon = $_POST['notel'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];


    include "koneksi.php";
    
    $query="INSERT INTO `tb_siswa`(`nomer`, `nama`, `notel`, `alamat`, `kelas`) VALUES ('','$nama','$notel','$alamat','$kelas')";
    $hasil=mysqli_query($conn, $query);

    if ($hasil) 
    header ('location: siswa-edit.php');

?>