<?php
//koneksi db
$host="localhost";
$user="root";
$password="";
$database="db_infosekolah";
$conn=mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    echo "KONEKSI DATABASE GAGAL!!!";
}
?>