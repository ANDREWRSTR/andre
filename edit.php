<?php 
include 'koneksi.php';

$id = $_GET['id'];

$query = $koneksi->query("select * from pengaduan where id_pengaduan='$id'");

$data = $query->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
</head>
<style>


</style>
    <?php include'navbar.php' ?>
<body style="background-color:RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important ;">
    <div class="text-bg-secondary p-3">
    <div class="container">
        <form action="proses_update.php?id=<?= $data['id_pengaduan']?>" method="POST">
            <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label" style="color:black">Laporan Anda</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="buat"><?php echo $data ['isi_laporan']?></textarea>
            </div>
            <a><button type="submit" class="btn btn-dark">Edit</button></a>
        </form>
    </div>
    </div>  
</body>
</html>