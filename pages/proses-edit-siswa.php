<?php

include "koneksi.php";

$nomer=$_POST['nomer'];
$nama=$_POST['nama'];
$notel=$_POST['notel'];
$alamat=$_POST['alamat'];
$kelas=$_POST['kelas'];

$query = "UPDATE `tb_siswa` SET `nomer`='$nomer',`nama`='$nama',`notel`='$notel',`alamat`='$alamat',`kelas`='$kelas' WHERE nomer='$nomer'";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    header('location: siswa-edit.php');

}else {
    echo "Gagal edit data!";
}
?>