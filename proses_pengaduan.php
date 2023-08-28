<?php
$isi = $_POST ['buat'];

//session_start();

//$nik = $_SESSION ['nik'];

$nama_foto = $_FILES['gambar']['name'];
$asal_foto = $_FILES['gambar']['tmp_name'];

include 'koneksi.php';
$tanggal = date('Y-m-d');

$koneksi->query("insert into pengaduan values('', '$tanggal', '', '$isi', '$nama_foto', 'proses')");

move_uploaded_file($asal_foto, "gambar_laporan/$nama_foto");

header("location:table.php");
?>