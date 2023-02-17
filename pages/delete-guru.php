<?php

include "koneksi.php";
$id=$_GET['nomer'];
$query="DELETE FROM `tb_guru` WHERE nomer='$id'";
$hasil=mysqli_query($conn, $query);

if ($hasil) {
    ?>
    <script language="javascript">document.location.href="guru-edit.php";</script>
    <?php
}else{
    echo "Gagal hapus data";
}
?>