<meta http-equiv="refresh" content="2;url=http://localhost/surat_kita/petugas.php">

<?php
include 'connect.php';

$id = $_GET['id'];
$id_petugas = $_POST["id_petugas"];
$nama_depan = $_POST["nama_depan"];
$nama_belakang = $_POST["nama_belakang"];
$pasword = $_POST["password"];
$hak = $_POST["hak"];


$sql =  "UPDATE petugas SET id_petugas='$id_petugas',nama_depan='$nama_depan',nama_belakang='$nama_belakang',pasword='$password',hak='$hak' WHERE id_petugas='$id'";
if ($konek->query($sql)=== TRUE){
	echo "Data Berhasil diubah";
} else {
	echo "Error: " . $sql . "<br>" . $konek->error;
}
header("Location:petugas.php");
?>