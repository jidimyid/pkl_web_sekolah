<?php
//menjalankan session : selalu diletakkan di awal
session_start();
//menghapus session username dan level
unset($_SESSION['username']);
unset($_SESSION['level']);
//menghapus semua session dari browser
session_destroy();
echo "<h1>Anda sudah logout</h1>";
echo "<p><a href='login-page.php'>Login Kembali</a></p>";
?>