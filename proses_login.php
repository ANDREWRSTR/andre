<?php 
session_start();
$nama = $_POST['username'];
$pw = $_POST['password'];
include "koneksi.php";

$query = $koneksi->query("select * from masyarakat where username='$nama' AND password='$pw' ");

$JumlahBaris = $query->rowCount();

if($JumlahBaris > 0){

    $data = $query->fetch();

    $_SESSION['nik'] = $data['nik'];
    $_SESSION['level'] = 'masyarakat';

    header("Location: table.php"); 
}
else{
    header("Location: login.php"); 
}
?>