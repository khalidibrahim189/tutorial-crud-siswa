<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Data Siswa</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Tambah Data Siswa
                </div>

                <div class="card-body">
                    <form action="simpan-siswa.php" method="POST">
                        <div class="form-group">
                            <label for="">NISN</label>
                            <input type="text" name="nisn" class="form-control" placeholder="Masukan NISN anda">
                        </div>

                        <div class="form-group mt-2">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan nama lengkap anda">
                        </div>

                        <div class="form-group mt-2">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Masukan nama lengkap anda">
                        </div>

                        <button type="submit" class="btn btn-danger mt-3">Simpan</button>
                        <button type="reset" class="btn btn-primary mt-3">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>