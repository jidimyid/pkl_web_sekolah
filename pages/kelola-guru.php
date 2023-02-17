<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <style>
      * {
        font-family: "Poppins", sans-serif;
      }
    </style>
    <title>Kelola Guru</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('https://smkn4malang.sch.id/wp-content/uploads/2020/01/Ekstrakurikuler-Seni-Tari-1-scaled.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Tambah Guru</h3>
            <p class="mb-4">Tambahkan data guru melalui form dibawah ini!</p>
            <form action="tambah-guru.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="nama">Nama Guru</label>
                    <input type="text" class="form-control" placeholder="Suyanto M.Pd" name="nama">
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="jabatan">Nomor Telepon</label>
                    <input type="text" class="form-control" placeholder="0897-7748-9844" name="notel">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="jabatan">Alamat</label>
                    <input type="text" class="form-control" placeholder="Jurangwugu, Wagir" name="alamat">
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="alamat">Jabatan</label>
                    <input type="text" class="form-control" placeholder="Guru Agama" name="jabatan">
                  </div>    
                </div>
              </div>
            
              <div class="d-flex mb-5 mt-4 align-items-center">
                <div class="d-flex align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Atau ingin mengelola <a href="guru-edit.php">data guru?</a>.</span>
                </label>
              </div>
              </div>


              <input type="submit" name="submit" value="Tambahkan" class="btn px-5 btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    
  <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>