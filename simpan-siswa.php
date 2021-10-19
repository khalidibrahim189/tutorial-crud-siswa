<?php

include('koneksi.php');

$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];



//query insert data ke database
$query = "INSERT INTO tbl_siswa (nisn,nama_lengkap,alamat) VALUES ('$nisn','$nama_lengkap','$alamat')";


if($koneksi-> query($query)){
    //redirect ke dalam index.php
    header("location: index.php");
}else{
    //pesan error gagal tambah datat
    echo "Data gagal disimpan!";
}


?>