<meta http-equiv="refresh" content="2;url=http://localhost/surat_kita/surat_masuk.php">

<?php
include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM surat_masuk WHERE no_agenda=$id";
if ($konek->query($sql)=== TRUE){
	echo "Data Berhasil dihapus";
} else {
	echo "Error: " . $sql . "<br>" . $konek->error;
}
header("Location:surat_masuk.php");
?>