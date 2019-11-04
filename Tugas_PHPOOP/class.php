<?php
$mysqli = new mysqli('localhost', 'root', '', 'crud');

class siswa{
	public $conn;
 	public function __construct() {
    $this->conn = mysqli_connect('localhost', 'root', '', 'crud');
  }

	function set_siswa(){
		$ambildata = $this ->conn -> query("SELECT * FROM siswa");
		while($pecah = $ambildata -> fetch_assoc()){
			$data[] = $pecah;
		}
		return $data;
	}
	function get_siswa($nama,$alamat,$foto){
		$namafoto = $foto['name'];
		$lokasifoto = $foto['tmp_name'];
		move_uploaded_file($lokasifoto, "foto/$namafoto");
		$this ->conn -> query("INSERT INTO siswa (nama,alamat,foto) VALUES ('$nama','$alamat','$namafoto')");
	}
	function hapusdata($nama) {
		mysqli_query($this->conn, "DELETE FROM siswa WHERE nama='$nama'");
	  }
	  function updatedata($nama,$alamat){
		mysqli_query($this->conn, "UPDATE siswa SET nama='$nama',alamat='$alamat' where nama='$nama'");
	}
}
$siswa = new siswa($mysqli);
?>
