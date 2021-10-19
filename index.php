<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Siswa</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Mahasiswa</div>
                    <div class="card-body">
                        <a href="tambah-siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">Tambah data</a>

                        <table class="table table-bordered table-striped mt-3" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">NAMA LENGKAP</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('koneksi.php');
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM tbl_siswa");
                                while ($data = mysqli_fetch_array($query)) {

                                ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['nisn'] ?></td>
                                        <td><?php echo $data['nama_lengkap'] ?></td>
                                        <td><?php echo $data['alamat'] ?></td>
                                        <td>
                                        <a href="edit-siswa.php?id=<?php echo $data['id_siswa'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                        <a href="hapus-siswa.php?id=<?php echo $data['id_siswa'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                        </td>
                                    </tr>


                                <?php

                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
</script>
</body>

</html>