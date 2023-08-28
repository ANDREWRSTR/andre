<?php

$nik = $_POST ['nik'];
$nd = $_POST ['nama_depan'];
$nb = $_POST ['nama_belakang'];
$no = $_POST ['nomor_telepon'];
$pw = $_POST ['sandi'];

include 'koneksi.php';

$koneksi->query("insert into masyarakat values('$nik', '$nd', '$nb', '$pw', '$no')");

header("location:login.php")

?>