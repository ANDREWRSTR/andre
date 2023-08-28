<?php 

 $koneksi = new PDO ("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");

 $query = $koneksi->query("select * from masyarakat");
 $data = $query->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
</head>
<style>
    h1{
      text-align: center;
      margin-top: 40px;
      margin-bottom: 40px;
    }

</style>
<body>
  <h1>detail laporan</h1>
  <div class="container">
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Nik</th>
      <th scope="col">Nama</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Kata Sandi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data as $masyarakat){ ?>
    <tr>
      <td><?= $masyarakat['nik']?></td>
      <td><?= $masyarakat['nama']?><?= $masyarakat['username']?></td>
      <td><?= $masyarakat['telp']?></td>
      <td><?= $masyarakat['password']?></td>

    </tr>
    <?php } ?>
  </tbody>
</table>
  </div>
</body>
</html>