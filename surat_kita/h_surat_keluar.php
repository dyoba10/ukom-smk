<meta http-equiv="refresh" content="2;url=http://localhost/surat_kita/surat_keluar.php">

<?php
include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM surat_keluar WHERE no_agenda=$id";
if ($konek->query($sql)=== TRUE){
	echo "Data Berhasil dihapus";
} else {
	echo "Error: " . $sql . "<br>" . $konek->error;
}
header("Location:surat_keluar.php");
?>