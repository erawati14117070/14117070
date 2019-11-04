<?php
include 'class.php';

$datasiswa = $siswa -> set_siswa();
//print_r($datasiswa);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Data Mahasiswa</title>
</head>

<body>
  <div class="container">
    <h3 class="text-center mb-4">DATA MAHASISWA PEMROGRAMAN WEB RA</h3>
    <div class="row d-flex justify-content-between m-2">
      <a name="" id="" class="btn btn-success" href="tambahsiswa.php" role="button">Tambah Data</a>
    </div>

    <table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Foto</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($datasiswa as $key => $value) {
			?>
			<tr>
				<td><?php echo $key+=1; ?> </td>
				<td><?php echo $value['nama']; ?></td>
				<td><?php echo $value['alamat']; ?></td>
				<td><?php echo $value['foto']; ?></td>
			</tr>
			<?php } ?>		
		</tbody>
    </table>
		<td>
            <span class="btn btn-warning"><a href="delete.php?nama=<?= $value["nama"]; ?>">Hapus Data</a></span>
            <span class="btn btn-warning"><a href="update.php?nama=<?= $value["nama"]; ?>" >Update Data</a></span>
        </td>
  </div>
</body>

</html>