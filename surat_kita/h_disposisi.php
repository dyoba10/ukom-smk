<meta http-equiv="refresh" content="2;url=http://localhost/surat_kita/disposisi.php">

<?php
include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM disposisis WHERE no_disposisi=$id";
if ($konek->query($sql)=== TRUE){
	echo "Data Berhasil dihapus";
} else {
	echo "Error: " . $sql . "<br>" . $konek->error;
}
header("Location:disposisi.php");
?>