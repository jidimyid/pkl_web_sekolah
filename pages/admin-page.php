<?php
//menjalankan session : selalu diletakkan di awal
session_start();
if (isset($_SESSION['level']) && isset($_SESSION['email']))
{
    //jika level admin akan masuk ke halaman admin.php
    if ($_SESSION['level'] == "admin");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style-admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="admin.php">Admin Panel</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <button type="submit" class="nav-link px-3 bg-dark border-0 text-danger"><a href="logout.php">Logout</a><i class="uil uil-signout"></i></a></button> 
        </div>
        </div>
    </header>


    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="kelola-akun.php">
                <i class="uil uil-user"></i>
                Kelola Akun
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="kelola-siswa.php">
                <i class="uil uil-file-alt"></i>
                Kelola Siswa
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="kelola-guru.php">
                <i class="uil uil-user"></i>
                Kelola Guru
            </a>
            </li>
        </ul>
    </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</body>
</html>
<?php
    //jika kondisi level user makan akan diarahkan ke halaman user.php
    if ($_SESSION['level'] == "user") {
        header('location:home-page.php');
    }
?>
<?php
//jika user belum terdaftar maka akan diarahkan ke halaman register.php
if (!isset($_SESSION['level']))
{
    echo "Anda tidak boleh mengakses halaman ini tanpa : ";
    echo "<a href='login-page.php'>Login</a><br>";
    echo "<a href='register-page.php'>Belum punya akun?</a>";
}
?>