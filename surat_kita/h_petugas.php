<meta http-equiv="refresh" content="2;url=http://localhost/surat_kita/petugas.php">

<?php
include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM petugas WHERE id_petugas=$id";
if ($konek->query($sql)=== TRUE){
	echo "Data Berhasil dihapus";
} else {
	echo "Error: " . $sql . "<br>" . $konek->error;
}
header("Location:petugas.php");
?>