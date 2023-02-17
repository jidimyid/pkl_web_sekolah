<?php

include "koneksi.php";
$id=$_GET['nomer'];
$query="DELETE FROM `tb_siswa` WHERE nomer='$id'";
$hasil=mysqli_query($conn, $query);

if ($hasil) {
    ?>
    <script language="javascript">document.location.href="siswa-edit.php";</script>
    <?php
}else{
    echo "Gagal hapus data";
}
?>