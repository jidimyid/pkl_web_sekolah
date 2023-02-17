<?php
$username=$_POST['email'];
$password1=$_POST['pass1'];
$password2=$_POST['pass2'];
$level="user"; //otomatis setiap register dianggap level user

//cek kesamaan password
if ($password1 == $password2) {
    include "koneksi.php";

    //perlu dibuat sebarang pengacak
    $pengacak="p3ng4c4k";

    //mengenkripsi password dengan md5() dan pengacak
    $passmd=md5($pengacak . md5($password1));

    //menyimpan username dan password terenkripsi ke database
    $query="INSERT INTO tb_login VALUES('$username', '$passmd', '$level')";
    $hasil = mysqli_query($conn, $query);

    //menampilkan status pendaftaran
    if ($hasil) echo "User sudah berhasil terdaftar<br> <a href='login-page.php'>Kembali ke halaman login</a>";
    else echo "Username sudah ada yang memiliki";
}
else echo "Password yang dimasukkan tidak sama";
?>