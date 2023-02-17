<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
    <script type="text/javascript" src="assets/DataTables/media/js/jquery.js"></script>
    <script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
      * {
        font-family: "Poppins", sans-serif;
      }
    </style>
</head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="https://i0.wp.com/smkn4malang.sch.id/wp-content/uploads/2020/02/logo-grafika.png?resize=242%2C300&ssl=1" class="bi me-2" width="50" height="60" role="img" aria-label="Bootstrap"></img>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" style="margin-left: 750px">
          <li><a href="home-page.php" class="nav-link px-2 text-secondary">Beranda</a></li>
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Profil Sekolah
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="visimisi-page.php">Visi Misi</a></li>
            <li><a class="dropdown-item" href="sejarah-page.php">Sejarah</a></li>
          </ul>
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Data
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="siswa-page.php">Siswa</a></li>
            <li><a class="dropdown-item" href="guru-page.php">Guru</a></li>
          </ul>
          <li><a href="berita-page.php" class="nav-link px-2 text-white">Berita</a></li>
          <li><a href="kontak-page.php" class="nav-link px-2 text-white">Kontak</a></li>
          

        
      </div>
    </div>
  </header><br><br>
  <main>
  <table class="table table-striped data" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include "koneksi.php";

            $query="SELECT * FROM tb_guru";
            $hasil=mysqli_query($conn, $query);

            foreach ($hasil as $data) : 
            ?>
            <tr>
            <td><?= $data['nomer'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['notel'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['jabatan'] ?></td>
            </tr>
            <?php
            endforeach;
            ?>
        </tbody>
  </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
</html>