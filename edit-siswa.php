<?php

include('koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM tbl_siswa WHERE id_siswa = $id LIMIT 1";

$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_array($result);



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Data Siswa</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Edit Data Siswa
                    </div>

                    <div class="card-body">
                        <form action="update-siswa.php" method="POST">
                            <div class="form-group">
                                <label for="">NISN</label>
                                <input type="text" name="nisn" value="<?php echo $row['nisn'] ?>" class="form-control">
                                <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>">
                            </div>

                            <div class="form-group mt-3">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>" class="form-control">
                            </div>

                            <div class="form-group mt-3">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success mt-2">UPDATE</button>
                            <button type="reset" class="btn btn-warning mt-2">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>