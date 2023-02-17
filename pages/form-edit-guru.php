<?php
    if (isset($_GET['nomer'])) {
    	// ambil data get dari form

        include "koneksi.php";

        $nomer = $_GET['nomer'];
        // fungsi query untuk menampilkan data dari tabel pegawai berdasarkan nip
        $query="SELECT * FROM `tb_guru` WHERE nomer='$nomer'";
        $hasil=mysqli_query($conn, $query);
        $data=mysqli_fetch_array($hasil);
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Data Guru</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <style>
        * {
            font-family: "Poppins", sans-serif;
        }
        </style>
    </head>
    <body class="bg-dark">
    <form action="proses-edit.php" method="post">
    <section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="https://img.freepik.com/free-vector/focused-tiny-people-reading-books_74855-5836.jpg?w=826&t=st=1676616430~exp=1676617030~hmac=664a19318faf7cbe939f828f3fa5d39f47a1f23a7962cdd1d7956bae36854d7d"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Update Data Guru</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="nomer" class="form-control form-control-lg" value="<?php echo $data['nomer'];;?>" />
                      <label class="form-label" for="form3Example1m">Nomor</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="nama" class="form-control form-control-lg" value="<?php echo $data['nama'];?>" />
                      <label class="form-label" for="form3Example1n">Nama</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="notel" class="form-control form-control-lg" value="<?php echo $data['notel'];?>" />
                      <label class="form-label" for="form3Example1m1">No Telepon</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="jabatan" class="form-control form-control-lg"  value="<?php echo $data['jabatan'];?>"  />
                      <label class="form-label" for="form3Example1n1">Jabatan</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="alamat" class="form-control form-control-lg" value="<?php echo $data['alamat'];?>" />
                  <label class="form-label" for="form3Example8">Alamat</label>
                </div>


                <div class="d-flex justify-content-end pt-3">
                  <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
    </html>