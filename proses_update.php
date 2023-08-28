<?php 

$isi = $_POST['buat'];
$id = $_GET['id'];

include 'koneksi.php';

$query = $koneksi->query("UPDATE pengaduan SET isi_laporan='$isi' where id_pengaduan='$id'");

header("location:table.php")

?>