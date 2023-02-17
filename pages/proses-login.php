<?php
//menjalankan session : selalu diletakkan di awal
session_start();
include "koneksi.php";
$username = $_POST['email'];
$password = $_POST['password'];

//mencari password terenkripsi berdasarkan username
$query = "SELECT * FROM tb_login WHERE email='$username'";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_array($hasil);

//format pengacak harus sama dengan format di submit_register.php
$pengacak = "p3ng4c4k";

//cek kesesuaian password terenkripsi dari form login
//dengan password terenkripsi dari database 
$passmd=md5($pengacak.md5($password));
if ($passmd == $data['password'])
{
    //menyimpan username dan level ke dalam session
    $_SESSION['level']=$data['level'];
    $_SESSION['email']=$data['email'];

    //menampilkan menu ke halaman akses
    echo "<h2>Login Sukses</h2>";
    header('location: admin-page.php');
}else echo "<h2>Login Gagal</h2>";
?>