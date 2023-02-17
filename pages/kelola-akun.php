<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola User | Dochive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Akun</h1>
    </div>
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            <th scope="col" rowspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";

            $query="SELECT * FROM tb_login";
            $hasil=mysqli_query($conn, $query);

            foreach ($hasil as $data) : 
            ?>
            <tr>
            <td><?= $data['email'] ?></td>
            <td><?= $data['password'] ?></td>
            <td><?= $data['level'] ?></td>
            <td>
                <a href="detail.php" class="badge bg-info"><i class="uil uil-eye"></i></a>
                <a href="form_update.php" class="badge bg-warning"><i class="uil uil-edit-alt"></i></a>
                <form action="delete.php" method="post" class="d-inline">
                <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus User Ini?')"><i class="uil uil-trash"></i></button>
                </form>
            </td>
            </tr>
            <?php
            endforeach;
            ?>

        </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</body>
</html>