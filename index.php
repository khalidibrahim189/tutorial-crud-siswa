<?php
//k=koneksi ke daari database

$servername = "localhost";
$user       = "root";
$password   = "";
$db_name    = "data-santri";

$koneksi = mysqli_connect($servername, $user, $password, $db_name) or die(mysqli_error($koneksi));



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Santri QODR </title>
</head>

<body>

    <div class="container">
        <h3 class="text-center">Data Santri QODR</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="mx-auto">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Daftar Santri QODR 2021-2022</div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="">NIM</label>
                                    <input type="text" name="tnim" class="form-control" placeholder="Input Nim anda" required>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="tnama" class="form-control" placeholder="Input nama anda" required>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Alamat</label>
                                    <input type="text" name="talamat" class="form-control" placeholder="Input alamat anda" required>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Keahlian</label>
                                    <select class="form-control" name="tkeahlian">
                                        <option value=""></option>
                                        <option value="Frontend Developer">Frontend Developer</option>
                                        <option value="Backend Developer">Backend Developer</option>
                                        <option value="Android Developer">Android Developer</option>
                                        <option value="UI/UX Designer">UI / UX Designer</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary mt-3" name="bsimpan">Simpan Data</button>
                                <button type="reset" class="btn btn-danger mt-3" name="breset">Kosongkan Data</button>
                            </form>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header bg-success text-white">Data Santri Tedaftar</div>
                        <div class="card-body">
                            <div class="mx-auto">
                                <table class="table table-bordered table-striped mt-3">
                                    <tr class="text-center">
                                        <th>No.</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Keahlian</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <?php
                                        $no = 1;
                                        $tampildata = mysqli_query($koneksi,"SELECT * FROM santri order by id_mhs desc");
                                        while($data = mysqli_fetch_array($tampildata)) :


                                    ?>

                                    <tr class="text-center">
                                        <td><?= $no++; ?></td>
                                        <td><?= $data['nim'];?></td>
                                        <td><?= $data['nama'];?></td>
                                        <td><?= $data['alamat'];?></td>
                                        <td><?= $data['keahlian'];?></td>
                                        <td></td>
                                    </tr>

                                    <?php endwhile; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>