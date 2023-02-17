<?php

include "koneksi.php";

$nomer=$_POST['nomer'];
$nama=$_POST['nama'];
$notel=$_POST['notel'];
$alamat=$_POST['alamat'];
$jabatan=$_POST['jabatan'];

$query = "UPDATE `tb_guru` SET `nomer`='$nomer',`nama`='$nama',`notel`='$notel',`alamat`='$alamat',`jabatan`='$jabatan' WHERE nomer='$nomer'";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    header('location: guru-edit.php');

}else {
    echo "Gagal edit data!";
}
?>