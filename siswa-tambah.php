<?php

include 'koneksi.php';

if (isset($_POST['proses'])) {
    $simpan = mysqli_query($conn, "insert into user set
            nama = '$_POST[nama]',
            asal = '$_POST[asal]',
            jenis_kelamin = '$_POST[jenis_kelamin]',
            prodi = '$_POST[prodi]'");

    if ($simpan) {
        echo "<script>
                alert('data disimpan');
            </script>";
    } else {
        echo "<script>
                alert('data tidak disimpan');
            </script>";
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Siswa</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Data Tambah Mahasiswa</h2>
                <div class="mx-auto">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Asal</label>
                            <input type="text" name="asal" class="form-control">
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control">
                        </div>

                        <div class="form-group mt-3">
                            <label for="">Program Studi</label>
                            <input type="text" name="prodi" class="form-control">
                        </div>

                        <input type="submit" name="proses" value="Simpan" class="btn btn-danger mt-4">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>