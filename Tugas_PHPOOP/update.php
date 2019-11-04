<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <title>update data</title>
</head>

<body>
  <div class="container">
  <h3 class="text-center mb-4">Update Data</h3>
    <div class="row">
      <div class="col-sm-8 m-auto">
        <form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" aria-describedby="helpId" required>
        </div>
		<div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" aria-describedby="helpId">
        </div>
		<div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control" aria-describedby="helpId">
        </div>
		<button type="submit" class="btn btn-primary" name="kirim">Update Data</button>
		</form>
      </div>
    </div>
  </div>
</body>
</html>

<?php
include 'class.php';
if(isset($_POST['kirim'])){
    $siswa -> updatedata($_POST['nama'],$_POST['alamat']);
	echo "<script>alert('data terupdate');</script>";
	echo "<script>location='tampilsiswa.php';</script>";
}
?>