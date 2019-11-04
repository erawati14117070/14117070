<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <title>hapus data</title>
</head>

<body>
  <div class="container">
  <h3 class="text-center mb-4">Menghapus Data</h3>
    <div class="row">
      <div class="col-sm-8 m-auto">
        <form action="" method="post" enctype="multipart/form-data">
		    <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" aria-describedby="helpId" required>
        </div>
	    	<button type="submit" class="btn btn-primary" name="kirim">Hapus Data</button>
	    	</form>
      </div>
    </div>
  </div>
</body>
</html>

<?php
include 'class.php';
if(isset($_POST['kirim'])){
  $siswa -> hapusdata($_POST['nama']);
	echo "<script>alert('data terhapus');</script>";
	echo "<script>location='tampilsiswa.php';</script>";
}
?>