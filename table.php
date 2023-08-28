<?php 
session_start();


if(!isset($_SESSION['nik'])){
  header('location:login.php');
}

 $koneksi = new PDO ("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$nik = $_SESSION['nik'];

 $query = $koneksi->query("select * from pengaduan where nik='$nik'");
 $data = $query->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REKAP</title>
    <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
</head>
<style>
    h1{
        text-align: center;
        font-family: fantasy;
        color: black;
    }
    .x{
      color: black;
      border-radius: 50%;
      background-color: red;
    }
    .edit{
     color: white;
     background-color: grey;
     border-radius: 5px;
    }
    .edit img{
     height: 30px;
    }
    a{
      text-decoration: none;
    }
</style>
<body>
    <?php include"navbar.php" ?>
    <div class="text-bg-secondary p-3">
    <h1>Rekap Laporan Anda</h1><br>
<div class="container">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nik</th>
      <th scope="col">Tanggal Kejadian</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $pengaduan){ ?>
    <tr>
      <td><?= $pengaduan['id_pengaduan']?></td>
      <td><?= $pengaduan['nik']?></td>
      <td><?= $pengaduan['tgl_pengaduan']?></td>
      <td><?= $pengaduan['isi_laporan']?></td>
      <td><img style="height: 70px; width: 50;" src="gambar_laporan/<?= $pengaduan['foto'] ?>"></td>
      <td><?= $pengaduan['status']?></td>
      <td> <a href="edit.php?id=<?= $pengaduan['id_pengaduan']?>"><button class="edit"><img src="img/edit.png"></button></a>
        <a href="proses_hapus.php?id=<?= $pengaduan['id_pengaduan']?>"><button class="x"><b>X</b></button></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
    </div>
    <?php include"penutup.php" ?>
</body>
</html>